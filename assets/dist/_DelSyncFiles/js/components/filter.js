/*! UIkit 3.23.11 | https://www.getuikit.com | (c) 2014 - 2025 YOOtheme | MIT License */

(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory(require('uikit-util')) :
    typeof define === 'function' && define.amd ? define('uikitfilter', ['uikit-util'], factory) :
    (global = typeof globalThis !== 'undefined' ? globalThis : global || self, global.UIkitFilter = factory(global.UIkit.util));
})(this, (function (uikitUtil) { 'use strict';

    function parseOptions(options, args = []) {
      try {
        return options ? uikitUtil.startsWith(options, "{") ? JSON.parse(options) : args.length && !uikitUtil.includes(options, ":") ? { [args[0]]: options } : options.split(";").reduce((options2, option) => {
          const [key, value] = option.split(/:(.*)/);
          if (key && !uikitUtil.isUndefined(value)) {
            options2[key.trim()] = value.trim();
          }
          return options2;
        }, {}) : {};
      } catch (e) {
        return {};
      }
    }

    function callUpdate(instance, e = "update") {
      if (!instance._connected) {
        return;
      }
      if (!instance._updates.length) {
        return;
      }
      if (!instance._queued) {
        instance._queued = /* @__PURE__ */ new Set();
        uikitUtil.fastdom.read(() => {
          if (instance._connected) {
            runUpdates(instance, instance._queued);
          }
          instance._queued = null;
        });
      }
      instance._queued.add(e.type || e);
    }
    function runUpdates(instance, types) {
      for (const { read, write, events = [] } of instance._updates) {
        if (!types.has("update") && !events.some((type) => types.has(type))) {
          continue;
        }
        let result;
        if (read) {
          result = read.call(instance, instance._data, types);
          if (result && uikitUtil.isPlainObject(result)) {
            uikitUtil.assign(instance._data, result);
          }
        }
        if (write && result !== false) {
          uikitUtil.fastdom.write(() => {
            if (instance._connected) {
              write.call(instance, instance._data, types);
            }
          });
        }
      }
    }

    function resize(options) {
      return observe(uikitUtil.observeResize, options, "resize");
    }
    function mutation(options) {
      return observe(uikitUtil.observeMutation, options);
    }
    function observe(observe2, options, emit) {
      return {
        observe: observe2,
        handler() {
          callUpdate(this, emit);
        },
        ...options
      };
    }

    ({
      observe: [
        mutation({
          options: {
            childList: true
          }
        }),
        mutation({
          options: {
            attributes: true,
            attributeFilter: ["style"]
          }
        }),
        resize({
          handler(mutations) {
            for (const {
              borderBoxSize: [{ inlineSize, blockSize }]
            } of mutations) {
              if (inlineSize || blockSize) {
                this.$emit("resize");
                return;
              }
            }
          },
          target: ({ $el }) => [$el, ...uikitUtil.children($el)]
        })
      ]});
    function getRows(elements) {
      const sorted = [[]];
      const withOffset = elements.some(
        (el, i) => i && elements[i - 1].offsetParent !== el.offsetParent
      );
      for (const el of elements) {
        if (!uikitUtil.isVisible(el)) {
          continue;
        }
        const offset = getOffset(el, withOffset);
        for (let i = sorted.length - 1; i >= 0; i--) {
          const current = sorted[i];
          if (!current[0]) {
            current.push(el);
            break;
          }
          const offsetCurrent = getOffset(current[0], withOffset);
          if (offset.top >= offsetCurrent.bottom - 1 && offset.top !== offsetCurrent.top) {
            sorted.push([el]);
            break;
          }
          if (offset.bottom - 1 > offsetCurrent.top || offset.top === offsetCurrent.top) {
            let j = current.length - 1;
            for (; j >= 0; j--) {
              const offsetCurrent2 = getOffset(current[j], withOffset);
              if (offset.left >= offsetCurrent2.left) {
                break;
              }
            }
            current.splice(j + 1, 0, el);
            break;
          }
          if (i === 0) {
            sorted.unshift([el]);
            break;
          }
        }
      }
      return sorted;
    }
    function getOffset(element, offset = false) {
      let { offsetTop, offsetLeft, offsetHeight, offsetWidth } = element;
      if (offset) {
        [offsetTop, offsetLeft] = uikitUtil.offsetPosition(element);
      }
      return {
        top: offsetTop,
        left: offsetLeft,
        bottom: offsetTop + offsetHeight,
        right: offsetLeft + offsetWidth
      };
    }

    const clsLeave = "uk-transition-leave";
    const clsEnter = "uk-transition-enter";
    function fade(action, target, duration, stagger = 0) {
      const index = transitionIndex(target, true);
      const propsIn = { opacity: 1 };
      const propsOut = { opacity: 0 };
      const isCurrentIndex = () => index === transitionIndex(target);
      const wrapIndexFn = (fn) => () => isCurrentIndex() ? fn() : Promise.reject();
      const leaveFn = wrapIndexFn(async () => {
        uikitUtil.addClass(target, clsLeave);
        await (stagger ? Promise.all(
          getTransitionNodes(target).map(async (child, i) => {
            await awaitTimeout(i * stagger);
            return uikitUtil.Transition.start(child, propsOut, duration / 2, "ease");
          })
        ) : uikitUtil.Transition.start(target, propsOut, duration / 2, "ease"));
        uikitUtil.removeClass(target, clsLeave);
      });
      const enterFn = wrapIndexFn(async () => {
        const oldHeight = uikitUtil.height(target);
        uikitUtil.addClass(target, clsEnter);
        action();
        uikitUtil.css(stagger ? uikitUtil.children(target) : target, propsOut);
        uikitUtil.height(target, oldHeight);
        await awaitTimeout();
        uikitUtil.height(target, "");
        const newHeight = uikitUtil.height(target);
        uikitUtil.css(target, "alignContent", "flex-start");
        uikitUtil.height(target, oldHeight);
        let transitions = [];
        let targetDuration = duration / 2;
        if (stagger) {
          const nodes = getTransitionNodes(target);
          uikitUtil.css(uikitUtil.children(target), propsOut);
          transitions = nodes.map(async (child, i) => {
            await awaitTimeout(i * stagger);
            await uikitUtil.Transition.start(child, propsIn, duration / 2, "ease");
            if (isCurrentIndex()) {
              uikitUtil.resetProps(child, propsIn);
            }
          });
          targetDuration += nodes.length * stagger;
        }
        if (!stagger || oldHeight !== newHeight) {
          const targetProps = { height: newHeight, ...stagger ? {} : propsIn };
          transitions.push(uikitUtil.Transition.start(target, targetProps, targetDuration, "ease"));
        }
        await Promise.all(transitions);
        uikitUtil.removeClass(target, clsEnter);
        if (isCurrentIndex()) {
          uikitUtil.resetProps(target, { height: "", alignContent: "", ...propsIn });
          delete target.dataset.transition;
        }
      });
      return uikitUtil.hasClass(target, clsLeave) ? waitTransitionend(target).then(enterFn) : uikitUtil.hasClass(target, clsEnter) ? waitTransitionend(target).then(leaveFn).then(enterFn) : leaveFn().then(enterFn);
    }
    function transitionIndex(target, next) {
      if (next) {
        target.dataset.transition = 1 + transitionIndex(target);
      }
      return uikitUtil.toNumber(target.dataset.transition) || 0;
    }
    function waitTransitionend(target) {
      return Promise.all(
        uikitUtil.children(target).filter(uikitUtil.Transition.inProgress).map(
          (el) => new Promise((resolve) => uikitUtil.once(el, "transitionend transitioncanceled", resolve))
        )
      );
    }
    function getTransitionNodes(target) {
      return getRows(uikitUtil.children(target)).flat().filter(uikitUtil.isVisible);
    }
    function awaitTimeout(timeout) {
      return new Promise((resolve) => setTimeout(resolve, timeout));
    }

    async function slide(action, target, duration) {
      await awaitFrame();
      let nodes = uikitUtil.children(target);
      const currentProps = nodes.map((el) => getProps(el, true));
      const targetProps = { ...uikitUtil.css(target, ["height", "padding"]), display: "block" };
      const targets = nodes.concat(target);
      await Promise.all(targets.map(uikitUtil.Transition.cancel));
      uikitUtil.css(targets, "transitionProperty", "none");
      await action();
      nodes = nodes.concat(uikitUtil.children(target).filter((el) => !uikitUtil.includes(nodes, el)));
      await Promise.resolve();
      uikitUtil.css(targets, "transitionProperty", "");
      const targetStyle = uikitUtil.attr(target, "style");
      const targetPropsTo = uikitUtil.css(target, ["height", "padding"]);
      const [propsTo, propsFrom] = getTransitionProps(target, nodes, currentProps);
      const attrsTo = nodes.map((el) => ({ style: uikitUtil.attr(el, "style") }));
      nodes.forEach((el, i) => propsFrom[i] && uikitUtil.css(el, propsFrom[i]));
      uikitUtil.css(target, targetProps);
      uikitUtil.trigger(target, "scroll");
      await awaitFrame();
      const transitions = nodes.map((el, i) => uikitUtil.parent(el) === target && uikitUtil.Transition.start(el, propsTo[i], duration, "ease")).concat(uikitUtil.Transition.start(target, targetPropsTo, duration, "ease"));
      try {
        await Promise.all(transitions);
        nodes.forEach((el, i) => {
          uikitUtil.attr(el, attrsTo[i]);
          if (uikitUtil.parent(el) === target) {
            uikitUtil.css(el, "display", propsTo[i].opacity === 0 ? "none" : "");
          }
        });
        uikitUtil.attr(target, "style", targetStyle);
      } catch (e) {
        uikitUtil.attr(nodes, "style", "");
        uikitUtil.resetProps(target, targetProps);
      }
    }
    function getProps(el, opacity) {
      const zIndex = uikitUtil.css(el, "zIndex");
      return uikitUtil.isVisible(el) ? {
        display: "",
        opacity: opacity ? uikitUtil.css(el, "opacity") : "0",
        pointerEvents: "none",
        position: "absolute",
        zIndex: zIndex === "auto" ? uikitUtil.index(el) : zIndex,
        ...getPositionWithMargin(el)
      } : false;
    }
    function getTransitionProps(target, nodes, currentProps) {
      const propsTo = nodes.map(
        (el, i) => uikitUtil.parent(el) && i in currentProps ? currentProps[i] ? uikitUtil.isVisible(el) ? getPositionWithMargin(el) : { opacity: 0 } : { opacity: uikitUtil.isVisible(el) ? 1 : 0 } : false
      );
      const propsFrom = propsTo.map((props, i) => {
        const from = uikitUtil.parent(nodes[i]) === target && (currentProps[i] || getProps(nodes[i]));
        if (!from) {
          return false;
        }
        if (!props) {
          delete from.opacity;
        } else if (!("opacity" in props)) {
          const { opacity } = from;
          if (opacity % 1) {
            props.opacity = 1;
          } else {
            delete from.opacity;
          }
        }
        return from;
      });
      return [propsTo, propsFrom];
    }
    function getPositionWithMargin(el) {
      const { height, width } = uikitUtil.dimensions(el);
      return {
        height,
        width,
        transform: "",
        ...uikitUtil.position(el),
        ...uikitUtil.css(el, ["marginTop", "marginLeft"])
      };
    }
    function awaitFrame() {
      return new Promise((resolve) => requestAnimationFrame(resolve));
    }

    var Animate = {
      props: {
        duration: Number,
        animation: Boolean
      },
      data: {
        duration: 150,
        animation: "slide"
      },
      methods: {
        animate(action, target = this.$el) {
          const name = this.animation;
          const animationFn = name === "fade" ? fade : name === "delayed-fade" ? (...args) => fade(...args, 40) : name ? slide : () => {
            action();
            return Promise.resolve();
          };
          return animationFn(action, target, this.duration).catch(uikitUtil.noop);
        }
      }
    };

    function maybeDefaultPreventClick(e) {
      if (e.target.closest('a[href="#"],a[href=""]')) {
        e.preventDefault();
      }
    }

    const keyMap = {
      SPACE: 32};

    var Component = {
      mixins: [Animate],
      args: "target",
      props: {
        target: String,
        selActive: Boolean
      },
      data: {
        target: "",
        selActive: false,
        attrItem: "uk-filter-control",
        cls: "uk-active",
        duration: 250
      },
      computed: {
        children: ({ target }, $el) => uikitUtil.$$(`${target} > *`, $el),
        toggles: ({ attrItem }, $el) => uikitUtil.$$(`[${attrItem}],[data-${attrItem}]`, $el)
      },
      watch: {
        toggles(toggles) {
          this.updateState();
          const actives = uikitUtil.$$(this.selActive, this.$el);
          for (const toggle of toggles) {
            if (this.selActive !== false) {
              uikitUtil.toggleClass(toggle, this.cls, uikitUtil.includes(actives, toggle));
            }
            const button = findButton(toggle);
            if (uikitUtil.isTag(button, "a")) {
              button.role = "button";
            }
          }
        },
        children(list, prev) {
          if (prev) {
            this.updateState();
          }
        }
      },
      events: {
        name: "click keydown",
        delegate: ({ attrItem }) => `[${attrItem}],[data-${attrItem}]`,
        handler(e) {
          if (e.type === "keydown" && e.keyCode !== keyMap.SPACE) {
            return;
          }
          if (e.target.closest("a,button")) {
            maybeDefaultPreventClick(e);
            this.apply(e.current);
          }
        }
      },
      methods: {
        apply(el) {
          const prevState = this.getState();
          const newState = mergeState(el, this.attrItem, this.getState());
          if (!isEqualState(prevState, newState)) {
            this.setState(newState);
          }
        },
        getState() {
          return this.toggles.filter((item) => uikitUtil.hasClass(item, this.cls)).reduce((state, el) => mergeState(el, this.attrItem, state), {
            filter: { "": "" },
            sort: []
          });
        },
        async setState(state, animate = true) {
          state = { filter: { "": "" }, sort: [], ...state };
          uikitUtil.trigger(this.$el, "beforeFilter", [this, state]);
          for (const toggle of this.toggles) {
            uikitUtil.toggleClass(toggle, this.cls, matchFilter(toggle, this.attrItem, state));
          }
          await Promise.all(
            uikitUtil.$$(this.target, this.$el).map((target) => {
              const filterFn = () => applyState(state, target, uikitUtil.children(target));
              return animate ? this.animate(filterFn, target) : filterFn();
            })
          );
          uikitUtil.trigger(this.$el, "afterFilter", [this]);
        },
        updateState() {
          uikitUtil.fastdom.write(() => this.setState(this.getState(), false));
        }
      }
    };
    function getFilter(el, attr) {
      return parseOptions(uikitUtil.data(el, attr), ["filter"]);
    }
    function isEqualState(stateA, stateB) {
      return ["filter", "sort"].every((prop) => uikitUtil.isEqual(stateA[prop], stateB[prop]));
    }
    function applyState(state, target, children) {
      for (const el of children) {
        uikitUtil.css(
          el,
          "display",
          Object.values(state.filter).every((selector) => !selector || uikitUtil.matches(el, selector)) ? "" : "none"
        );
      }
      const [sort, order] = state.sort;
      if (sort) {
        const sorted = sortItems(children, sort, order);
        if (!uikitUtil.isEqual(sorted, children)) {
          uikitUtil.append(target, sorted);
        }
      }
    }
    function mergeState(el, attr, state) {
      const { filter, group, sort, order = "asc" } = getFilter(el, attr);
      if (filter || uikitUtil.isUndefined(sort)) {
        if (group) {
          if (filter) {
            delete state.filter[""];
            state.filter[group] = filter;
          } else {
            delete state.filter[group];
            if (uikitUtil.isEmpty(state.filter) || "" in state.filter) {
              state.filter = { "": filter || "" };
            }
          }
        } else {
          state.filter = { "": filter || "" };
        }
      }
      if (!uikitUtil.isUndefined(sort)) {
        state.sort = [sort, order];
      }
      return state;
    }
    function matchFilter(el, attr, { filter: stateFilter = { "": "" }, sort: [stateSort, stateOrder] }) {
      const { filter = "", group = "", sort, order = "asc" } = getFilter(el, attr);
      return uikitUtil.isUndefined(sort) ? group in stateFilter && filter === stateFilter[group] || !filter && group && !(group in stateFilter) && !stateFilter[""] : stateSort === sort && stateOrder === order;
    }
    function sortItems(nodes, sort, order) {
      return [...nodes].sort(
        (a, b) => uikitUtil.data(a, sort).localeCompare(uikitUtil.data(b, sort), void 0, { numeric: true }) * (order === "asc" || -1)
      );
    }
    function findButton(el) {
      return uikitUtil.$("a,button", el) || el;
    }

    if (typeof window !== "undefined" && window.UIkit) {
      window.UIkit.component("filter", Component);
    }

    return Component;

}));
