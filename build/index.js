(()=>{"use strict";var e,o={259:()=>{const e=window.wp.blocks,o=window.wp.element,r=window.wp.i18n,t=window.wp.blockEditor,n=window.wp.components,s=JSON.parse('{"u2":"create-block/query-loop-shortcode"}');(0,e.registerBlockType)(s.u2,{edit:function({attributes:e,setAttributes:s}){return(0,o.createElement)("div",{...(0,t.useBlockProps)()},(0,o.createElement)(n.TextControl,{label:(0,r.__)("Shortcode","shortcode"),value:e.shortcode,onChange:e=>s({shortcode:e})}))},save:function({attributes:e}){return t.useBlockProps.save(),e.shortcode}})}},r={};function t(e){var n=r[e];if(void 0!==n)return n.exports;var s=r[e]={exports:{}};return o[e](s,s.exports,t),s.exports}t.m=o,e=[],t.O=(o,r,n,s)=>{if(!r){var c=1/0;for(u=0;u<e.length;u++){r=e[u][0],n=e[u][1],s=e[u][2];for(var i=!0,l=0;l<r.length;l++)(!1&s||c>=s)&&Object.keys(t.O).every((e=>t.O[e](r[l])))?r.splice(l--,1):(i=!1,s<c&&(c=s));if(i){e.splice(u--,1);var a=n();void 0!==a&&(o=a)}}return o}s=s||0;for(var u=e.length;u>0&&e[u-1][2]>s;u--)e[u]=e[u-1];e[u]=[r,n,s]},t.o=(e,o)=>Object.prototype.hasOwnProperty.call(e,o),(()=>{var e={826:0,431:0};t.O.j=o=>0===e[o];var o=(o,r)=>{var n,s,c=r[0],i=r[1],l=r[2],a=0;if(c.some((o=>0!==e[o]))){for(n in i)t.o(i,n)&&(t.m[n]=i[n]);if(l)var u=l(t)}for(o&&o(r);a<c.length;a++)s=c[a],t.o(e,s)&&e[s]&&e[s][0](),e[s]=0;return t.O(u)},r=self.webpackChunkquery_loop_shortcode=self.webpackChunkquery_loop_shortcode||[];r.forEach(o.bind(null,0)),r.push=o.bind(null,r.push.bind(r))})();var n=t.O(void 0,[431],(()=>t(259)));n=t.O(n)})();