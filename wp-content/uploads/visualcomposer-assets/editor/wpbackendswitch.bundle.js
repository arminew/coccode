vcvWebpackJsonp([6],{"./public/config/variables.js":function(e,t,n){"use strict";n("./public/default-variables.js")},"./public/config/wpbackend-switcher-modules.js":function(e,t,n){"use strict";n("./node_modules/path-browserify/index.js").join;n("./public/editor/modules/content/backendSwitcher/module.js")},"./public/default-variables.js":function(e,t,n){"use strict";function i(e){return e&&e.__esModule?e:{"default":e}}var o=n("./node_modules/vc-cake/index.js"),r=i(o);r["default"].env("FEATURE_WEBPACK",!1),r["default"].env("debug",!1),r["default"].env("FIX_DND_FOR_TABS",!0),r["default"].env("CONTAINER_DIVIDER",!0),r["default"].env("MOBILE_DETECT",!0),r["default"].env("HUB_TEASER",!0),r["default"].env("FEATURE_ASSETS_FILTER",!0),r["default"].env("CONTAINER_DIVIDER_EMBED_VIDEO",!0),r["default"].env("DND_SMART_LINE_TRANSITION",!0),r["default"].env("DND_TRASH_BIN",!0),r["default"].env("DND_DISABLE_DROP_IN_CLOSED_TABS",!0),r["default"].env("ELEMENT_CONTROLS_DELAY",!0),r["default"].env("CSS_LOADING",!0),r["default"].env("EXISTING_ELEMENT_ATTR_FIX",!0),r["default"].env("PAGE_TEMPLATES_FE",!0),r["default"].env("DIVIDER_YOUTUBE",!0),r["default"].env("CUSTOM_JS",!0),r["default"].env("NAVBAR_SINGLE_CONTENT",!0),r["default"].env("DIVIDER_VIMEO",!0),r["default"].env("HUB_TEASER_ELEMENT_DOWNLOAD",!0),r["default"].env("UI_NOTIFICATIONS",!0),r["default"].env("DIVIDER_SHAPE_UPDATE",!0),r["default"].env("PAGE_TITLE_FE",!0),r["default"].env("ATTRIBUTE_LIBS",!0),r["default"].env("IFRAME_RELOAD",!0),r["default"].env("TEASER_DROPDOWN_UPDATE",!0),r["default"].env("FIX_UNREGISTERED_ELEMENT",!0),r["default"].env("FF_QUANTUM_DO",!0),r["default"].env("FE_SHORTCODES_SCRIPTS",!0),r["default"].env("FE_CONTENTEDITABLE_REFS",!0),r["default"].env("FE_LOGO_LINK_PREMIUM",!0),r["default"].env("GOOGLE_FONTS",!0),r["default"].env("FE_TOGGLE_ELEMENT",!0),r["default"].env("PARALLAX_MOUSEMOVE",!0),r["default"].env("HUB_REDESIGN",!0),r["default"].env("DISABLE_COLUMN_STACKING",!0),r["default"].env("CLASSIC_TABS",!0),r["default"].env("IMAGE_FILTERS",!0),r["default"].env("DND_FIX_TREEVIEW_CLOSED",!0),r["default"].env("CLASSIC_ACCORDION",!0),r["default"].env("REFACTOR_ELEMENT_ACCESS_POINT",!1),r["default"].env("COLORPICKER_LAST_USED",!0),r["default"].env("TF_SHOW_PLUGIN_UPDATE",!0),r["default"].env("TF_HEARTBEAT_HAS_CLASS_ERROR",!1),r["default"].env("CSS_GRID",!1),r["default"].env("SAVE_API",!0),r["default"].env("THEME_LAYOUTS",!1),r["default"].env("THEME_EDITOR",!1),r["default"].env("EXCLUDE_ATTRIBUTE",!0),r["default"].env("SAVE_ZIP",!0),r["default"].env("HFS_START_PAGE",!0),r["default"].env("HIDE_ATTRIBUTES_DEPENDING_ON_EDITOR",!0),r["default"].env("REPLACE_ELEMENTS",!0),r["default"].env("HUB_CONTROLS",!0),r["default"].env("REMOVE_SETTINGS_SAVE_BUTTON",!0),r["default"].env("PAGE_TEMPLATE_LAYOUTS",!0),r["default"].env("TF_FIX_EMPTY_ELEMENT_SECTION",!0),r["default"].env("PAGE_TEMPLATE_PREVIEW",!0),r["default"].env("TF_TEMPLATES_DROPDOWN_UPDATE",!0),r["default"].env("TF_SETTINGS_THEME_ICONS",!0),r["default"].env("TF_DISABLE_BACKEND",!0),r["default"].env("TF_RENDER_PERFORMANCE",!0),r["default"].env("CACHE_HOVER_CONTROLS",!0),r["default"].env("TF_FREE_VERSION_DOWNLOAD",!1),r["default"].env("SINGLE_IMAGE_REFACTOR",!0),r["default"].env("TF_ELEMENT_CRUD_PERFORMANCE",!1),r["default"].env("TF_PARAM_GROUP_CSS_MIXINS",!1)},"./public/editor/modules/content/backendSwitcher/lib/helpers/backendSwitcher/backendClassicSwitcher.js":function(e,t,n){"use strict";function i(e){return e&&e.__esModule?e:{"default":e}}Object.defineProperty(t,"__esModule",{value:!0});var o=n("./node_modules/babel-runtime/core-js/object/get-prototype-of.js"),r=i(o),s=n("./node_modules/babel-runtime/helpers/classCallCheck.js"),d=i(s),a=n("./node_modules/babel-runtime/helpers/createClass.js"),l=i(a),c=n("./node_modules/babel-runtime/helpers/possibleConstructorReturn.js"),u=i(c),E=n("./node_modules/babel-runtime/helpers/inherits.js"),f=i(E),v=n("./node_modules/react/index.js"),_=i(v),b=n("./node_modules/vc-cake/index.js"),w=(0,b.getStorage)("wordpressData"),m=function(e){function t(e){(0,d["default"])(this,t);var n=(0,u["default"])(this,(t.__proto__||(0,r["default"])(t)).call(this,e)),i=w.state("activeEditor").get();return n.state={editor:i},n.enableClassicEditor=n.enableClassicEditor.bind(n),n.enableBackendEditor=n.enableBackendEditor.bind(n),n}return(0,f["default"])(t,e),(0,l["default"])(t,[{key:"enableClassicEditor",value:function(e){e.preventDefault();var t="classic";this.setState({editor:t}),this.showClassicEditor()}},{key:"enableBackendEditor",value:function(e){e.preventDefault();var t=window.VCV_I18N&&window.VCV_I18N(),n=t&&t.enableBackendEditorConfirmMessage?t.enableBackendEditorConfirmMessage:"Visual Composer will overwrite your content created in WordPress Classic editor with the latest version of content created in Visual Composer Website Builder. Do you want to continue?";if(window.confirm(n)){var i="be";this.setState({editor:i}),this.showEditor()}}},{key:"showEditor",value:function(){document.getElementById("vcwb_visual_composer").classList.remove("vcv-hidden"),document.getElementById("postdivrich").classList.add("vcv-hidden"),w.state("activeEditor").set("be"),window.setTimeout(function(){w.state("activeEditor").set("be")},1)}},{key:"showClassicEditor",value:function(){document.getElementById("vcwb_visual_composer").classList.add("vcv-hidden"),document.getElementById("postdivrich").classList.remove("vcv-hidden"),w.state("activeEditor").set("classic"),window.setTimeout(function(){window.editorExpand&&(window.editorExpand.on(),window.editorExpand.on())},0)}},{key:"render",value:function(){var e=this,t=window.VCV_I18N&&window.VCV_I18N(),n=t?t.frontendEditor:"Frontend Editor",i=t&&t.backendEditor?t.backendEditor:"Backend Editor",o=t&&t.classicEditor?t.classicEditor:"Classic Editor",r=this.state.editor,s=_["default"].createElement("div",{className:"vcv-wpbackend-switcher-wrapper"},_["default"].createElement("div",{className:"vcv-wpbackend-switcher"},_["default"].createElement("span",{className:"vcv-wpbackend-switcher-logo"}),_["default"].createElement("a",{className:"vcv-wpbackend-switcher-option",href:window.vcvFrontendEditorLink},n),"be"!==r?_["default"].createElement("button",{className:"vcv-wpbackend-switcher-option",onClick:this.enableBackendEditor},i):""),"classic"!==r?function(){return _["default"].createElement("div",{className:"vcv-wpbackend-switcher--type-classic"},_["default"].createElement("button",{className:"vcv-wpbackend-switcher-option",onClick:e.enableClassicEditor},o))}():"");return s}}]),t}(_["default"].Component);t["default"]=m},"./public/editor/modules/content/backendSwitcher/lib/helpers/frontendSwitcher/frontendClassicSwitcher.js":function(e,t,n){"use strict";function i(e){return e&&e.__esModule?e:{"default":e}}Object.defineProperty(t,"__esModule",{value:!0});var o=n("./node_modules/babel-runtime/core-js/object/get-prototype-of.js"),r=i(o),s=n("./node_modules/babel-runtime/helpers/classCallCheck.js"),d=i(s),a=n("./node_modules/babel-runtime/helpers/createClass.js"),l=i(a),c=n("./node_modules/babel-runtime/helpers/possibleConstructorReturn.js"),u=i(c),E=n("./node_modules/babel-runtime/helpers/inherits.js"),f=i(E),v=n("./node_modules/react/index.js"),_=i(v),b=function(e){function t(e){(0,d["default"])(this,t);var n=(0,u["default"])(this,(t.__proto__||(0,r["default"])(t)).call(this,e)),i="classic";n.enableClassicEditor=n.enableClassicEditor.bind(n),n.openFrontendEditor=n.openFrontendEditor.bind(n);var o=document.getElementById("vcv-be-editor");return o&&"classic"!==o.value&&(i="be",n.hideClassicEditor()),n.state={editor:i},n}return(0,f["default"])(t,e),(0,l["default"])(t,[{key:"enableClassicEditor",value:function(e){e.preventDefault();var t="classic",n=window.VCV_I18N&&window.VCV_I18N(),i=n&&n.enableClassicEditorConfirmMessage?n.enableClassicEditorConfirmMessage:"Visual Composer will overwrite your content created in WordPress Classic editor with the latest version of content created in Visual Composer Website Builder. Do you want to continue?";window.confirm(i)&&(this.setState({editor:t}),this.showClassicEditor())}},{key:"openFrontendEditor",value:function(e){e.preventDefault();var t=window.VCV_I18N&&window.VCV_I18N(),n=t&&t.openFrontendEditorFromClassic?t.openFrontendEditorFromClassic:"Visual Composer will overwrite your content created in WordPress Classic editor with the latest version of content created in Visual Composer Website Builder. Do you want to continue?";("be"===this.state.editor||window.confirm(n))&&(window.location.href=e.currentTarget.dataset.href)}},{key:"hideClassicEditor",value:function(){document.getElementById("postdivrich").classList.add("vcv-hidden")}},{key:"showClassicEditor",value:function(){var e=document.getElementById("vcv-be-editor");e.value="classic",document.getElementById("postdivrich").classList.remove("vcv-hidden"),window.setTimeout(function(){window.editorExpand&&(window.editorExpand.on(),window.editorExpand.on())},0)}},{key:"render",value:function(){var e=this,t=window.VCV_I18N&&window.VCV_I18N(),n=t?t.frontendEditor:"Edit with Visual Composer Website Builder",i=t&&t.classicEditor?t.classicEditor:"Classic Editor",o=this.state.editor,r=_["default"].createElement("div",{className:"vcv-wpbackend-switcher-wrapper"},_["default"].createElement("div",{className:"vcv-wpbackend-switcher"},_["default"].createElement("span",{className:"vcv-wpbackend-switcher-logo"}),_["default"].createElement("button",{className:"vcv-wpbackend-switcher-option","data-href":window.vcvFrontendEditorLink,onClick:this.openFrontendEditor},n)),"classic"!==o?function(){return _["default"].createElement("div",{className:"vcv-wpbackend-switcher--type-classic"},_["default"].createElement("button",{className:"vcv-wpbackend-switcher-option",onClick:e.enableClassicEditor},i))}():"");return r}}]),t}(_["default"].Component);t["default"]=b},"./public/editor/modules/content/backendSwitcher/module.js":function(e,t,n){"use strict";function i(e){return e&&e.__esModule?e:{"default":e}}var o=n("./node_modules/vc-cake/index.js"),r=i(o),s=n("./node_modules/react-dom/index.js"),d=i(s),a=n("./node_modules/react/index.js"),l=i(a),c=n("./public/editor/modules/content/backendSwitcher/lib/helpers/backendSwitcher/backendClassicSwitcher.js"),u=i(c),E=n("./public/editor/modules/content/backendSwitcher/lib/helpers/frontendSwitcher/frontendClassicSwitcher.js"),f=i(E);r["default"].add("backendSwitcher",function(e){var t=document.querySelector("div#titlediv"),n=document.createElement("div");n.className="vcv-wpbackend-switcher-container";var i=!1;if(t)t.parentNode.insertBefore(n,t.nextSibling),i=!0;else{var o=document.getElementById("post-body-content");o&&(o.firstChild?o.insertBefore(n,o.firstChild):o.appendChild(n),i=!0)}i&&(r["default"].env("TF_DISABLE_BACKEND")?d["default"].render(l["default"].createElement(f["default"],null),n):d["default"].render(l["default"].createElement(u["default"],null),n))})},0:function(e,t,n){"use strict";function i(e){return e&&e.__esModule?e:{"default":e}}var o=n("./node_modules/jquery/dist/jquery.js"),r=i(o),s=n("./node_modules/vc-cake/index.js");n("./public/sources/less/wpbackend-switcher/init.less"),n("./public/config/variables.js"),(0,r["default"])(function(){n("./public/config/wpbackend-switcher-modules.js"),(0,s.env)("TF_DISABLE_BACKEND")&&(0,s.start)(function(){})})},"./public/sources/less/wpbackend-switcher/init.less":function(e,t){},"./node_modules/path-browserify/index.js":function(e,t,n){(function(e){function n(e,t){for(var n=0,i=e.length-1;i>=0;i--){var o=e[i];"."===o?e.splice(i,1):".."===o?(e.splice(i,1),n++):n&&(e.splice(i,1),n--)}if(t)for(;n--;n)e.unshift("..");return e}function i(e,t){if(e.filter)return e.filter(t);for(var n=[],i=0;i<e.length;i++)t(e[i],i,e)&&n.push(e[i]);return n}var o=/^(\/?|)([\s\S]*?)((?:\.{1,2}|[^\/]+?|)(\.[^.\/]*|))(?:[\/]*)$/,r=function(e){return o.exec(e).slice(1)};t.resolve=function(){for(var t="",o=!1,r=arguments.length-1;r>=-1&&!o;r--){var s=r>=0?arguments[r]:e.cwd();if("string"!=typeof s)throw new TypeError("Arguments to path.resolve must be strings");s&&(t=s+"/"+t,o="/"===s.charAt(0))}return t=n(i(t.split("/"),function(e){return!!e}),!o).join("/"),(o?"/":"")+t||"."},t.normalize=function(e){var o=t.isAbsolute(e),r="/"===s(e,-1);return e=n(i(e.split("/"),function(e){return!!e}),!o).join("/"),e||o||(e="."),e&&r&&(e+="/"),(o?"/":"")+e},t.isAbsolute=function(e){return"/"===e.charAt(0)},t.join=function(){var e=Array.prototype.slice.call(arguments,0);return t.normalize(i(e,function(e,t){if("string"!=typeof e)throw new TypeError("Arguments to path.join must be strings");return e}).join("/"))},t.relative=function(e,n){function i(e){for(var t=0;t<e.length&&""===e[t];t++);for(var n=e.length-1;n>=0&&""===e[n];n--);return t>n?[]:e.slice(t,n-t+1)}e=t.resolve(e).substr(1),n=t.resolve(n).substr(1);for(var o=i(e.split("/")),r=i(n.split("/")),s=Math.min(o.length,r.length),d=s,a=0;a<s;a++)if(o[a]!==r[a]){d=a;break}for(var l=[],a=d;a<o.length;a++)l.push("..");return l=l.concat(r.slice(d)),l.join("/")},t.sep="/",t.delimiter=":",t.dirname=function(e){var t=r(e),n=t[0],i=t[1];return n||i?(i&&(i=i.substr(0,i.length-1)),n+i):"."},t.basename=function(e,t){var n=r(e)[2];return t&&n.substr(-1*t.length)===t&&(n=n.substr(0,n.length-t.length)),n},t.extname=function(e){return r(e)[3]};var s="b"==="ab".substr(-1)?function(e,t,n){return e.substr(t,n)}:function(e,t,n){return t<0&&(t=e.length+t),e.substr(t,n)}}).call(t,n("./node_modules/node-libs-browser/node_modules/process/browser.js"))}});