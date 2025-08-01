/*! UIkit 3.23.11 | https://www.getuikit.com | (c) 2014 - 2025 YOOtheme | MIT License */

(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory(require('uikit-util')) :
    typeof define === 'function' && define.amd ? define('uikitparallax', ['uikit-util'], factory) :
    (global = typeof globalThis !== 'undefined' ? globalThis : global || self, global.UIkitParallax = factory(global.UIkit.util));
})(this, (function (uikitUtil) { 'use strict';

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
    function viewport(options) {
      return observe((target, handler) => uikitUtil.observeViewportResize(handler), options, "resize");
    }
    function scroll(options) {
      return observe(
        (target, handler) => ({
          disconnect: uikitUtil.on(toScrollTargets(target), "scroll", handler, { passive: true })
        }),
        options,
        "scroll"
      );
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
    function toScrollTargets(elements) {
      return uikitUtil.toNodes(elements).map((node) => {
        const { ownerDocument } = node;
        const parent2 = uikitUtil.scrollParent(node, true);
        return parent2 === ownerDocument.scrollingElement ? ownerDocument : parent2;
      });
    }

    var Media = {
      props: {
        media: Boolean
      },
      data: {
        media: false
      },
      connected() {
        const media = toMedia(this.media, this.$el);
        this.matchMedia = true;
        if (media) {
          this.mediaObj = window.matchMedia(media);
          const handler = () => {
            this.matchMedia = this.mediaObj.matches;
            uikitUtil.trigger(this.$el, uikitUtil.createEvent("mediachange", false, true, [this.mediaObj]));
          };
          this.offMediaObj = uikitUtil.on(this.mediaObj, "change", () => {
            handler();
            this.$emit("resize");
          });
          handler();
        }
      },
      disconnected() {
        var _a;
        (_a = this.offMediaObj) == null ? void 0 : _a.call(this);
      }
    };
    function toMedia(value, element) {
      if (uikitUtil.isString(value)) {
        if (uikitUtil.startsWith(value, "@")) {
          value = uikitUtil.toFloat(uikitUtil.css(element, `--uk-breakpoint-${value.slice(1)}`));
        } else if (isNaN(value)) {
          return value;
        }
      }
      return value && uikitUtil.isNumeric(value) ? `(min-width: ${value}px)` : "";
    }

    function startsWith(str, search) {
      var _a;
      return (_a = str == null ? void 0 : str.startsWith) == null ? void 0 : _a.call(str, search);
    }
    const { from: toArray } = Array;
    function isFunction(obj) {
      return typeof obj === "function";
    }
    function isObject(obj) {
      return obj !== null && typeof obj === "object";
    }
    function isWindow(obj) {
      return isObject(obj) && obj === obj.window;
    }
    function isDocument(obj) {
      return nodeType(obj) === 9;
    }
    function isNode(obj) {
      return nodeType(obj) >= 1;
    }
    function nodeType(obj) {
      return !isWindow(obj) && isObject(obj) && obj.nodeType;
    }
    function isString(value) {
      return typeof value === "string";
    }
    function isUndefined(value) {
      return value === void 0;
    }
    function toNode(element) {
      return element && toNodes(element)[0];
    }
    function toNodes(element) {
      return isNode(element) ? [element] : Array.from(element || []).filter(isNode);
    }
    function memoize(fn) {
      const cache = /* @__PURE__ */ Object.create(null);
      return (key, ...args) => cache[key] || (cache[key] = fn(key, ...args));
    }

    function attr(element, name, value) {
      var _a;
      if (isObject(name)) {
        for (const key in name) {
          attr(element, key, name[key]);
        }
        return;
      }
      if (isUndefined(value)) {
        return (_a = toNode(element)) == null ? void 0 : _a.getAttribute(name);
      } else {
        for (const el of toNodes(element)) {
          if (isFunction(value)) {
            value = value.call(el, attr(el, name));
          }
          if (value === null) {
            removeAttr(el, name);
          } else {
            el.setAttribute(name, value);
          }
        }
      }
    }
    function removeAttr(element, name) {
      toNodes(element).forEach((element2) => element2.removeAttribute(name));
    }

    const inBrowser = typeof window !== "undefined";

    const isVisibleFn = inBrowser && Element.prototype.checkVisibility || function() {
      return this.offsetWidth || this.offsetHeight || this.getClientRects().length;
    };
    function isVisible(element) {
      return toNodes(element).some((element2) => isVisibleFn.call(element2));
    }
    function parent(element) {
      var _a;
      return (_a = toNode(element)) == null ? void 0 : _a.parentElement;
    }
    function filter(element, selector) {
      return toNodes(element).filter((element2) => matches(element2, selector));
    }
    function matches(element, selector) {
      return toNodes(element).some((element2) => element2.matches(selector));
    }
    function children(element, selector) {
      element = toNode(element);
      const children2 = element ? toArray(element.children) : [];
      return selector ? filter(children2, selector) : children2;
    }
    function index(element, ref) {
      return children(parent(element)).indexOf(element);
    }

    function findAll(selector, context) {
      return toNodes(_query(selector, toNode(context), "querySelectorAll"));
    }
    const addStarRe = /([!>+~-])(?=\s+[!>+~-]|\s*$)/g;
    const splitSelectorRe = /(\([^)]*\)|[^,])+/g;
    const parseSelector = memoize((selector) => {
      let isContextSelector = false;
      if (!selector || !isString(selector)) {
        return {};
      }
      const selectors = [];
      for (let sel of selector.match(splitSelectorRe)) {
        sel = sel.trim().replace(addStarRe, "$1 *");
        isContextSelector || (isContextSelector = ["!", "+", "~", "-", ">"].includes(sel[0]));
        selectors.push(sel);
      }
      return {
        selector: selectors.join(","),
        selectors,
        isContextSelector
      };
    });
    const positionRe = /(\([^)]*\)|\S)*/;
    const parsePositionSelector = memoize((selector) => {
      selector = selector.slice(1).trim();
      const [position] = selector.match(positionRe);
      return [position, selector.slice(position.length + 1)];
    });
    function _query(selector, context = document, queryFn) {
      var _a;
      const parsed = parseSelector(selector);
      if (!parsed.isContextSelector) {
        return parsed.selector ? _doQuery(context, queryFn, parsed.selector) : selector;
      }
      selector = "";
      const isSingle = parsed.selectors.length === 1;
      for (let sel of parsed.selectors) {
        let positionSel;
        let ctx = context;
        if (sel[0] === "!") {
          [positionSel, sel] = parsePositionSelector(sel);
          ctx = (_a = context.parentElement) == null ? void 0 : _a.closest(positionSel);
          if (!sel && isSingle) {
            return ctx;
          }
        }
        if (ctx && sel[0] === "-") {
          [positionSel, sel] = parsePositionSelector(sel);
          ctx = ctx.previousElementSibling;
          ctx = matches(ctx, positionSel) ? ctx : null;
          if (!sel && isSingle) {
            return ctx;
          }
        }
        if (!ctx) {
          continue;
        }
        if (isSingle) {
          if (sel[0] === "~" || sel[0] === "+") {
            sel = `:scope > :nth-child(${index(ctx) + 1}) ${sel}`;
            ctx = ctx.parentElement;
          } else if (sel[0] === ">") {
            sel = `:scope ${sel}`;
          }
          return _doQuery(ctx, queryFn, sel);
        }
        selector += `${selector ? "," : ""}${domPath(ctx)} ${sel}`;
      }
      if (!isDocument(context)) {
        context = context.ownerDocument;
      }
      return _doQuery(context, queryFn, selector);
    }
    function _doQuery(context, queryFn, selector) {
      try {
        return context[queryFn](selector);
      } catch (e) {
        return null;
      }
    }
    function domPath(element) {
      const names = [];
      while (element.parentNode) {
        const id = attr(element, "id");
        if (id) {
          names.unshift(`#${escape(id)}`);
          break;
        } else {
          let { tagName } = element;
          if (tagName !== "HTML") {
            tagName += `:nth-child(${index(element) + 1})`;
          }
          names.unshift(tagName);
          element = element.parentNode;
        }
      }
      return names.join(" > ");
    }
    function escape(css) {
      return isString(css) ? CSS.escape(css) : "";
    }

    const singleTagRe = /^<(\w+)\s*\/?>(?:<\/\1>)?$/;
    function fragment(html2) {
      const matches = singleTagRe.exec(html2);
      if (matches) {
        return document.createElement(matches[1]);
      }
      const container = document.createElement("template");
      container.innerHTML = html2.trim();
      return unwrapSingle(container.content.childNodes);
    }
    function unwrapSingle(nodes) {
      return nodes.length > 1 ? nodes : nodes[0];
    }
    function $$(selector, context) {
      return isHtml(selector) ? toNodes(fragment(selector)) : findAll(selector, context);
    }
    function isHtml(str) {
      return isString(str) && startsWith(str.trim(), "<");
    }

    function getMaxPathLength(el) {
      return isVisible(el) ? Math.ceil(
        Math.max(0, ...$$("[stroke]", el).map((stroke) => {
          var _a;
          return ((_a = stroke.getTotalLength) == null ? void 0 : _a.call(stroke)) || 0;
        }))
      ) : 0;
    }

    const props = {
      x: transformFn,
      y: transformFn,
      rotate: transformFn,
      scale: transformFn,
      color: colorFn,
      backgroundColor: colorFn,
      borderColor: colorFn,
      blur: filterFn,
      hue: filterFn,
      fopacity: filterFn,
      grayscale: filterFn,
      invert: filterFn,
      saturate: filterFn,
      sepia: filterFn,
      opacity: cssPropFn,
      stroke: strokeFn,
      bgx: backgroundFn,
      bgy: backgroundFn
    };
    const { keys } = Object;
    var Parallax = {
      mixins: [Media],
      props: fillObject(keys(props), "list"),
      data: fillObject(keys(props), void 0),
      computed: {
        props(properties, $el) {
          const stops = {};
          for (const prop in properties) {
            if (prop in props && !uikitUtil.isUndefined(properties[prop])) {
              stops[prop] = properties[prop].slice();
            }
          }
          const result = {};
          for (const prop in stops) {
            result[prop] = props[prop](prop, $el, stops[prop], stops);
          }
          return result;
        }
      },
      events: {
        load() {
          this.$emit();
        }
      },
      methods: {
        reset() {
          uikitUtil.resetProps(this.$el, this.getCss(0));
        },
        getCss(percent) {
          const css2 = {};
          for (const prop in this.props) {
            this.props[prop](css2, uikitUtil.clamp(percent));
          }
          css2.willChange = Object.keys(css2).map(uikitUtil.propName).join(",");
          return css2;
        }
      }
    };
    function transformFn(prop, el, stops) {
      let unit = getUnit(stops) || { x: "px", y: "px", rotate: "deg" }[prop] || "";
      let transformFn2;
      if (prop === "x" || prop === "y") {
        prop = `translate${uikitUtil.ucfirst(prop)}`;
        transformFn2 = (stop) => uikitUtil.toFloat(uikitUtil.toFloat(stop).toFixed(unit === "px" ? 0 : 6));
      } else if (prop === "scale") {
        unit = "";
        transformFn2 = (stop) => {
          var _a;
          return getUnit([stop]) ? uikitUtil.toPx(stop, "width", el, true) / el[`offset${((_a = stop.endsWith) == null ? void 0 : _a.call(stop, "vh")) ? "Height" : "Width"}`] : uikitUtil.toFloat(stop);
        };
      }
      if (stops.length === 1) {
        stops.unshift(prop === "scale" ? 1 : 0);
      }
      stops = parseStops(stops, transformFn2);
      return (css2, percent) => {
        css2.transform = `${css2.transform || ""} ${prop}(${getValue(stops, percent)}${unit})`;
      };
    }
    function colorFn(prop, el, stops) {
      if (stops.length === 1) {
        stops.unshift(getCssValue(el, prop, ""));
      }
      stops = parseStops(stops, (stop) => parseColor(el, stop));
      return (css2, percent) => {
        const [start, end, p] = getStop(stops, percent);
        const value = start.map((value2, i) => {
          value2 += p * (end[i] - value2);
          return i === 3 ? uikitUtil.toFloat(value2) : parseInt(value2, 10);
        }).join(",");
        css2[prop] = `rgba(${value})`;
      };
    }
    function parseColor(el, color) {
      return getCssValue(el, "color", color).split(/[(),]/g).slice(1, -1).concat(1).slice(0, 4).map(uikitUtil.toFloat);
    }
    function filterFn(prop, el, stops) {
      if (stops.length === 1) {
        stops.unshift(0);
      }
      const unit = getUnit(stops) || { blur: "px", hue: "deg" }[prop] || "%";
      prop = { fopacity: "opacity", hue: "hue-rotate" }[prop] || prop;
      stops = parseStops(stops);
      return (css2, percent) => {
        const value = getValue(stops, percent);
        css2.filter = `${css2.filter || ""} ${prop}(${value + unit})`;
      };
    }
    function cssPropFn(prop, el, stops) {
      if (stops.length === 1) {
        stops.unshift(getCssValue(el, prop, ""));
      }
      stops = parseStops(stops);
      return (css2, percent) => {
        css2[prop] = getValue(stops, percent);
      };
    }
    function strokeFn(prop, el, stops) {
      if (stops.length === 1) {
        stops.unshift(0);
      }
      const unit = getUnit(stops);
      const length = getMaxPathLength(el);
      stops = parseStops(stops.reverse(), (stop) => {
        stop = uikitUtil.toFloat(stop);
        return unit === "%" ? stop * length / 100 : stop;
      });
      if (!stops.some(([value]) => value)) {
        return uikitUtil.noop;
      }
      uikitUtil.css(el, "strokeDasharray", length);
      return (css2, percent) => {
        css2.strokeDashoffset = getValue(stops, percent);
      };
    }
    function backgroundFn(prop, el, stops, props2) {
      if (stops.length === 1) {
        stops.unshift(0);
      }
      const attr = prop === "bgy" ? "height" : "width";
      props2[prop] = parseStops(stops, (stop) => uikitUtil.toPx(stop, attr, el));
      const bgProps = ["bgx", "bgy"].filter((prop2) => prop2 in props2);
      if (bgProps.length === 2 && prop === "bgx") {
        return uikitUtil.noop;
      }
      if (getCssValue(el, "backgroundSize", "") === "cover") {
        return backgroundCoverFn(prop, el, stops, props2);
      }
      const positions = {};
      for (const prop2 of bgProps) {
        positions[prop2] = getBackgroundPos(el, prop2);
      }
      return setBackgroundPosFn(bgProps, positions, props2);
    }
    function backgroundCoverFn(prop, el, stops, props2) {
      const dimImage = getBackgroundImageDimensions(el);
      if (!dimImage.width) {
        return uikitUtil.noop;
      }
      const dimEl = {
        width: el.offsetWidth,
        height: el.offsetHeight
      };
      const bgProps = ["bgx", "bgy"].filter((prop2) => prop2 in props2);
      const positions = {};
      for (const prop2 of bgProps) {
        const values = props2[prop2].map(([value]) => value);
        const min = Math.min(...values);
        const max = Math.max(...values);
        const down = values.indexOf(min) < values.indexOf(max);
        const diff = max - min;
        positions[prop2] = `${(down ? -diff : 0) - (down ? min : max)}px`;
        dimEl[prop2 === "bgy" ? "height" : "width"] += diff;
      }
      const dim = uikitUtil.Dimensions.cover(dimImage, dimEl);
      for (const prop2 of bgProps) {
        const attr = prop2 === "bgy" ? "height" : "width";
        const overflow = dim[attr] - dimEl[attr];
        positions[prop2] = `max(${getBackgroundPos(el, prop2)},-${overflow}px) + ${positions[prop2]}`;
      }
      const fn = setBackgroundPosFn(bgProps, positions, props2);
      return (css2, percent) => {
        fn(css2, percent);
        css2.backgroundSize = `${dim.width}px ${dim.height}px`;
        css2.backgroundRepeat = "no-repeat";
      };
    }
    function getBackgroundPos(el, prop) {
      return getCssValue(el, `background-position-${prop.slice(-1)}`, "");
    }
    function setBackgroundPosFn(bgProps, positions, props2) {
      return function(css2, percent) {
        for (const prop of bgProps) {
          const value = getValue(props2[prop], percent);
          css2[`background-position-${prop.slice(-1)}`] = `calc(${positions[prop]} + ${value}px)`;
        }
      };
    }
    const loading = {};
    const dimensions = {};
    function getBackgroundImageDimensions(el) {
      const src = uikitUtil.css(el, "backgroundImage").replace(/^none|url\(["']?(.+?)["']?\)$/, "$1");
      if (dimensions[src]) {
        return dimensions[src];
      }
      const image = new Image();
      if (src) {
        image.src = src;
        if (!image.naturalWidth && !loading[src]) {
          uikitUtil.once(image, "error load", () => {
            dimensions[src] = toDimensions(image);
            uikitUtil.trigger(el, uikitUtil.createEvent("load", false));
          });
          loading[src] = true;
          return toDimensions(image);
        }
      }
      return dimensions[src] = toDimensions(image);
    }
    function toDimensions(image) {
      return {
        width: image.naturalWidth,
        height: image.naturalHeight
      };
    }
    function parseStops(stops, fn = uikitUtil.toFloat) {
      const result = [];
      const { length } = stops;
      let nullIndex = 0;
      for (let i = 0; i < length; i++) {
        let [value, percent] = uikitUtil.isString(stops[i]) ? stops[i].trim().split(/ (?![^(]*\))/) : [stops[i]];
        value = fn(value);
        percent = percent ? uikitUtil.toFloat(percent) / 100 : null;
        if (i === 0) {
          if (percent === null) {
            percent = 0;
          } else if (percent) {
            result.push([value, 0]);
          }
        } else if (i === length - 1) {
          if (percent === null) {
            percent = 1;
          } else if (percent !== 1) {
            result.push([value, percent]);
            percent = 1;
          }
        }
        result.push([value, percent]);
        if (percent === null) {
          nullIndex++;
        } else if (nullIndex) {
          const leftPercent = result[i - nullIndex - 1][1];
          const p = (percent - leftPercent) / (nullIndex + 1);
          for (let j = nullIndex; j > 0; j--) {
            result[i - j][1] = leftPercent + p * (nullIndex - j + 1);
          }
          nullIndex = 0;
        }
      }
      return result;
    }
    function getStop(stops, percent) {
      const index = uikitUtil.findIndex(stops.slice(1), ([, targetPercent]) => percent <= targetPercent) + 1;
      return [
        stops[index - 1][0],
        stops[index][0],
        (percent - stops[index - 1][1]) / (stops[index][1] - stops[index - 1][1])
      ];
    }
    function getValue(stops, percent) {
      const [start, end, p] = getStop(stops, percent);
      return start + Math.abs(start - end) * p * (start < end ? 1 : -1);
    }
    const unitRe = /^-?\d+(?:\.\d+)?(\S+)?/;
    function getUnit(stops, defaultUnit) {
      var _a;
      for (const stop of stops) {
        const match = (_a = stop.match) == null ? void 0 : _a.call(stop, unitRe);
        if (match) {
          return match[1];
        }
      }
      return defaultUnit;
    }
    function getCssValue(el, prop, value) {
      const prev = el.style[prop];
      const val = uikitUtil.css(uikitUtil.css(el, prop, value), prop);
      el.style[prop] = prev;
      return val;
    }
    function fillObject(keys2, value) {
      return keys2.reduce((data, prop) => {
        data[prop] = value;
        return data;
      }, {});
    }
    function ease(percent, easing) {
      return easing >= 0 ? Math.pow(percent, easing + 1) : 1 - Math.pow(1 - percent, 1 - easing);
    }

    var Component = {
      mixins: [Parallax],
      props: {
        target: String,
        viewport: Number,
        // Deprecated
        easing: Number,
        start: String,
        end: String
      },
      data: {
        target: false,
        viewport: 1,
        easing: 1,
        start: 0,
        end: 0
      },
      computed: {
        target: ({ target }, $el) => getOffsetElement(target && uikitUtil.query(target, $el) || $el),
        start({ start }) {
          return uikitUtil.toPx(start, "height", this.target, true);
        },
        end({ end, viewport: viewport2 }) {
          return uikitUtil.toPx(
            end || (viewport2 = (1 - viewport2) * 100) && `${viewport2}vh+${viewport2}%`,
            "height",
            this.target,
            true
          );
        }
      },
      observe: [
        viewport(),
        scroll({ target: ({ target }) => target }),
        resize({ target: ({ $el, target }) => [$el, target, uikitUtil.scrollParent(target, true)] })
      ],
      update: {
        read({ percent }, types) {
          if (!types.has("scroll")) {
            percent = false;
          }
          if (!uikitUtil.isVisible(this.$el)) {
            return false;
          }
          if (!this.matchMedia) {
            return;
          }
          const prev = percent;
          percent = ease(uikitUtil.scrolledOver(this.target, this.start, this.end), this.easing);
          return {
            percent,
            style: prev === percent ? false : this.getCss(percent)
          };
        },
        write({ style }) {
          if (!this.matchMedia) {
            this.reset();
            return;
          }
          style && uikitUtil.css(this.$el, style);
        },
        events: ["scroll", "resize"]
      }
    };
    function getOffsetElement(el) {
      return el ? "offsetTop" in el ? el : getOffsetElement(uikitUtil.parent(el)) : document.documentElement;
    }

    if (typeof window !== "undefined" && window.UIkit) {
      window.UIkit.component("parallax", Component);
    }

    return Component;

}));
