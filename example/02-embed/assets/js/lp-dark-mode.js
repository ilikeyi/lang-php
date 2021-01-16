const doc = document;
const store = localStorage;
const PREFERS_COLOR_SCHEME = 'prefers-color-scheme';
const MEDIA = 'media';
const LIGHT = 'light';
const DARK = 'dark';
const NO_PREFERENCE = 'no-preference';
const MQ_DARK = `(${PREFERS_COLOR_SCHEME}:${DARK})`;
const MQ_LIGHT = `(${PREFERS_COLOR_SCHEME}:${LIGHT}),(${PREFERS_COLOR_SCHEME}:${NO_PREFERENCE})`;
const LINK_REL_STYLESHEET = 'link[rel=stylesheet]';
const REMEMBER = 'remember';
const LEGEND = 'legend';
const TOGGLE = 'toggle';
const SWITCH = 'switch';
const APPEARANCE = 'appearance';
const PERMANENT = 'permanent';
const MODE = 'mode';
const COLOR_SCHEME_CHANGE = 'colorschemechange';
const PERMANENT_COLOR_SCHEME = 'permanentcolorscheme';
const ALL = 'all';
const NOT_ALL = 'not all';
const NAME = 'dark-mode-toggle';

const installStringReflection = (obj, attrName, propName = attrName) => {
	Object.defineProperty(obj, propName, {
		enumerable: true,
		get() {
			const value = this.getAttribute(attrName);
			return value === null ? '' : value;
		},
		set(v) {
			this.setAttribute(attrName, v);
		},
	});
};

const installBoolReflection = (obj, attrName, propName = attrName) => {
	Object.defineProperty(obj, propName, {
		enumerable: true,
		get() {
			return this.hasAttribute(attrName);
		},
		set(v) {
			if (v) {
				this.setAttribute(attrName, '');
			} else {
				this.removeAttribute(attrName);
			}
		},
	});
};

const template = doc.createElement('template');
template.innerHTML = `<style>*,:before,:after{box-sizing:border-box}:host{contain:content;display:block}:host([hidden]){display:none}form{background-color:var(--${NAME}-background-color,transparent);color:var(--${NAME}-color,inherit);padding:0}fieldset{border:none;margin:0;padding-block-start:.25rem;padding-block-end:.25rem;padding-inline-start:.25rem;padding-inline-end:.25rem;font-size:13px;}legend{font:var(--${NAME}-legend-font,inherit);padding:0}input,label{cursor:pointer}label{padding:.15rem;white-space:nowrap}input{opacity:0;position:absolute;pointer-events:none}input:focus+label{outline:#e59700 auto 2px;outline:-webkit-focus-ring-color auto 5px}label:before{content:"";display:inline-block;background-size:var(--${NAME}-icon-size,1rem);background-repeat:no-repeat;height:var(--${NAME}-icon-size,1rem);width:var(--${NAME}-icon-size,1rem);vertical-align:middle;margin:0 .2rem 0 0.8rem}label[dir="rtl"]:before{margin:0 0 0 .5rem}#lightLabel:before{background-image:var(--${NAME}-light-icon,url("assets/images/sun.svg"))}#darkLabel:before{filter:var(--${NAME}-icon-filter,none);background-image:var(--${NAME}-dark-icon,url("assets/images/moon.svg"))}#checkboxLabel:before{background-image:var(--${NAME}-checkbox-icon,none)}#permanentLabel:before{background-image:var(--${NAME}-remember-icon-unchecked,url("assets/images/unchecked.svg"))}#lightLabel,#darkLabel,#checkboxLabel{font:var(--${NAME}-label-font,inherit);}#lightLabel:empty,#darkLabel:empty,#checkboxLabel:empty{font-size:0;padding:0}#permanentLabel{font:var(--${NAME}-remember-font,inherit)}input:checked+#permanentLabel:before{background-image:var(--${NAME}-remember-icon-checked,url("assets/images/checked.svg"))}input:checked+#darkLabel,input:checked+#lightLabel{background-color:var(--${NAME}-active-mode-background-color,transparent)}input:checked  #darkLabel:before,input:checked+#lightLabel:before{background-color:var(--${NAME}-active-mode-background-color,transparent)}input:checked+#checkboxLabel:before{filter:var(--${NAME}-icon-filter,none)}input:checked+#checkboxLabel+aside #permanentLabel:before{filter:var(--${NAME}-remember-filter,invert(100%))}aside{visibility:hidden;margin-top:0.15rem}#lightLabel:focus-visible~aside,#darkLabel:focus-visible~aside,#checkboxLabel:focus-visible~aside{visibility:visible;transition:visibility 0s}aside #permanentLabel:empty{display:none}@media(hover:hover){aside{transition:visibility 3s}aside:hover{visibility:visible}#lightLabel:hover~aside,#darkLabel:hover~aside,#checkboxLabel:hover~aside{visibility:visible;transition:visibility 0s}}</style><form><fieldset><legend></legend><input id=lightRadio type=radio name=mode><label for=lightRadio id=lightLabel></label><input id=darkRadio type=radio name=mode><label for=darkRadio id=darkLabel></label><input id=darkCheckbox type=checkbox><label for=darkCheckbox id=checkboxLabel></label><aside><input id=permanentCheckbox type=checkbox><label for=permanentCheckbox id=permanentLabel></label></aside></fieldset></form>`;

export class DarkModeToggle extends HTMLElement {
	static get observedAttributes() {
		return [MODE, APPEARANCE, PERMANENT, LEGEND, LIGHT, DARK, REMEMBER];
	}

	constructor() {
		super();

		installStringReflection(this, MODE);
		installStringReflection(this, APPEARANCE);
		installStringReflection(this, LEGEND);
		installStringReflection(this, LIGHT);
		installStringReflection(this, DARK);
		installStringReflection(this, REMEMBER);

		installBoolReflection(this, PERMANENT);

		this._darkCSS = null;
		this._lightCSS = null;

		doc.addEventListener(COLOR_SCHEME_CHANGE, (event) => {
			this.mode = event.detail.colorScheme;
			this._updateRadios();
			this._updateCheckbox();
		});

		doc.addEventListener(PERMANENT_COLOR_SCHEME, (event) => {
			this.permanent = event.detail.permanent;
			this._permanentCheckbox.checked = this.permanent;
		});

		this._initializeDOM();
	}

	_initializeDOM() {
		const shadowRoot = this.attachShadow({mode: 'closed'});
		shadowRoot.appendChild(template.content.cloneNode(true));

		this._darkCSS = doc.querySelectorAll(`${LINK_REL_STYLESHEET}[${MEDIA}*=${PREFERS_COLOR_SCHEME}][${MEDIA}*="${DARK}"]`);
		this._lightCSS = doc.querySelectorAll(`${LINK_REL_STYLESHEET}[${MEDIA}*=${PREFERS_COLOR_SCHEME}][${MEDIA}*="${LIGHT}"],${LINK_REL_STYLESHEET}[${MEDIA}*=${PREFERS_COLOR_SCHEME}][${MEDIA}*="${NO_PREFERENCE}"]`);

		this._lightRadio = shadowRoot.querySelector('#lightRadio');
		this._lightLabel = shadowRoot.querySelector('#lightLabel');
		this._darkRadio = shadowRoot.querySelector('#darkRadio');
		this._darkLabel = shadowRoot.querySelector('#darkLabel');
		this._darkCheckbox = shadowRoot.querySelector('#darkCheckbox');
		this._checkboxLabel = shadowRoot.querySelector('#checkboxLabel');
		this._legendLabel = shadowRoot.querySelector('legend');
		this._permanentAside = shadowRoot.querySelector('aside');
		this._permanentCheckbox = shadowRoot.querySelector('#permanentCheckbox');
		this._permanentLabel = shadowRoot.querySelector('#permanentLabel');

		const hasNativePrefersColorScheme =
				matchMedia(MQ_DARK).media !== NOT_ALL;
		if (hasNativePrefersColorScheme) {
			matchMedia(MQ_DARK).addListener(({matches}) => {
				this.mode = matches ? DARK : LIGHT;
				this._dispatchEvent(COLOR_SCHEME_CHANGE, {colorScheme: this.mode});
			});
		}
		const rememberedValue = store.getItem(NAME);
		if (rememberedValue && [DARK, LIGHT].includes(rememberedValue)) {
			this.mode = rememberedValue;
			this._permanentCheckbox.checked = true;
			this.permanent = true;
		} else if (hasNativePrefersColorScheme) {
			this.mode = matchMedia(MQ_LIGHT).matches ? LIGHT : DARK;
		}
		if (!this.mode) {
			this.mode = LIGHT;
		}
		if (this.permanent && !rememberedValue) {
			store.setItem(NAME, this.mode);
		}
		if (!this.appearance) {
			this.appearance = TOGGLE;
		}
		this._updateAppearance();
		this._updateRadios();
		this._updateCheckbox();
		[this._lightRadio, this._darkRadio].forEach((input) => {
			input.addEventListener('change', () => {
				this.mode = this._lightRadio.checked ? LIGHT : DARK;
				this._updateCheckbox();
				this._dispatchEvent(COLOR_SCHEME_CHANGE, {colorScheme: this.mode});
			});
		});
		this._darkCheckbox.addEventListener('change', () => {
			this.mode = this._darkCheckbox.checked ? DARK : LIGHT;
			this._updateRadios();
			this._dispatchEvent(COLOR_SCHEME_CHANGE, {colorScheme: this.mode});
		});
		this._permanentCheckbox.addEventListener('change', () => {
			this.permanent = this._permanentCheckbox.checked;
			this._dispatchEvent(PERMANENT_COLOR_SCHEME, {
				permanent: this.permanent,
			});
		});
		this._updateMode();
		this._dispatchEvent(COLOR_SCHEME_CHANGE, {colorScheme: this.mode});
		this._dispatchEvent(PERMANENT_COLOR_SCHEME, {
			permanent: this.permanent,
		});
	}

	attributeChangedCallback(name, oldValue, newValue) {
		if (name === MODE) {
			if (![LIGHT, DARK].includes(newValue)) {
				throw new RangeError(`Allowed values: "${LIGHT}" and "${DARK}".`);
			}
			if (matchMedia('(hover:none)').matches && this.remember) {
				this._showPermanentAside();
			}
			if (this.permanent) {
				store.setItem(NAME, this.mode);
			}
			this._updateRadios();
			this._updateCheckbox();
			this._updateMode();
		} else if (name === APPEARANCE) {
			if (![TOGGLE, SWITCH].includes(newValue)) {
				throw new RangeError(`Allowed values: "${TOGGLE}" and "${SWITCH}".`);
			}
			this._updateAppearance();
		} else if (name === PERMANENT) {
			if (this.permanent) {
				store.setItem(NAME, this.mode);
			} else {
				store.removeItem(NAME);
			}
			this._permanentCheckbox.checked = this.permanent;
		} else if (name === LEGEND) {
			this._legendLabel.textContent = newValue;
		} else if (name === REMEMBER) {
			this._permanentLabel.textContent = newValue;
		} else if (name === LIGHT) {
			this._lightLabel.textContent = newValue;
			if (this.mode === LIGHT) {
				this._checkboxLabel.textContent = newValue;
			}
		} else if (name === DARK) {
			this._darkLabel.textContent = newValue;
			if (this.mode === DARK) {
				this._checkboxLabel.textContent = newValue;
			}
		}
	}

	_dispatchEvent(type, value) {
		this.dispatchEvent(new CustomEvent(type, {
			bubbles: true,
			composed: true,
			detail: value,
		}));
	}

	_updateAppearance() {
		const appearAsToggle = this.appearance === TOGGLE;
		this._lightRadio.hidden = appearAsToggle;
		this._lightLabel.hidden = appearAsToggle;
		this._darkRadio.hidden = appearAsToggle;
		this._darkLabel.hidden = appearAsToggle;
		this._darkCheckbox.hidden = !appearAsToggle;
		this._checkboxLabel.hidden = !appearAsToggle;
	}

	_updateRadios() {
		if (this.mode === LIGHT) {
			this._lightRadio.checked = true;
		} else {
			this._darkRadio.checked = true;
		}
	}

	_updateCheckbox() {
		if (this.mode === LIGHT) {
			this._checkboxLabel.style.setProperty(`--${NAME}-checkbox-icon`,
					`var(--${NAME}-light-icon,url("assets/images/moon.svg"))`);
			this._checkboxLabel.textContent = this.light;
			this._darkCheckbox.checked = false;
		} else {
			this._checkboxLabel.style.setProperty(`--${NAME}-checkbox-icon`,
					`var(--${NAME}-dark-icon,url("assets/images/sun.svg"))`);
			this._checkboxLabel.textContent = this.dark;
			this._darkCheckbox.checked = true;
		}
	}

	_updateMode() {
		if (this.mode === LIGHT) {
			this._lightCSS.forEach((link) => {
				link.media = ALL;
				link.disabled = false;
			});
			this._darkCSS.forEach((link) => {
				link.media = NOT_ALL;
				link.disabled = true;
			});
		} else {
			this._darkCSS.forEach((link) => {
				link.media = ALL;
				link.disabled = false;
			});
			this._lightCSS.forEach((link) => {
				link.media = NOT_ALL;
				link.disabled = true;
			});
		}
	}

	_showPermanentAside() {
		this._permanentAside.style.visibility = 'visible';
		setTimeout(() => {
			this._permanentAside.style.visibility = 'hidden';
		}, 3000);
	}
}

customElements.define(NAME, DarkModeToggle);