/* Slider 1*/
var	tpj = jQuery;
if(window.RS_MODULES === undefined) window.RS_MODULES = {};
if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["revslider1"] = {once: RS_MODULES.modules["revslider1"]!==undefined ? RS_MODULES.modules["revslider1"].once : undefined, init:function() {
	window.revapi1 = window.revapi1===undefined || window.revapi1===null || window.revapi1.length===0  ? document.getElementById("rev_slider_1") : window.revapi1;
	if(window.revapi1 === null || window.revapi1 === undefined || window.revapi1.length==0) { window.revapi1initTry = window.revapi1initTry ===undefined ? 0 : window.revapi1initTry+1; if (window.revapi1initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider1"].init()}); return;}
	window.revapi1 = jQuery(window.revapi1);
	if(window.revapi1.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_1"); return;}
	revapi1.revolutionInit({
			revapi:"revapi1",
			DPR:"dpr",
			sliderLayout:"fullwidth",
			visibilityLevels:"1240,1240,778,480",
			gridwidth:"1230,1230,778,480",
			gridheight:"950,950,650,400",
			lazyType:"smart",
			spinner:"spinner0",
			perspective:600,
			perspectiveType:"local",
			editorheight:"950,768,650,400",
			responsiveLevels:"1240,1240,778,480",
			progressBar:{disableProgressBar:true},
			navigation: {
				mouseScrollNavigation:false,
				wheelCallDelay:1000,
				onHoverStop:false,
				bullets: {
					enable:true,
					tmp:"",
					style:"hermes",
					h_align:"right",
					v_align:"center",
					h_offset:30,
					v_offset:0,
					direction:"vertical"
				}
			},
			viewPort: {
				global:true,
				globalDist:"-200px",
				enable:false,
				visible_area:"20%"
			},
			fallbacks: {
				allowHTML5AutoPlayOnAndroid:true
			},
	});
	
}} // End of RevInitScript
if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};

/* Slider 2*/ 
if(window.RS_MODULES === undefined) window.RS_MODULES = {};
if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["revslider2"] = {once: RS_MODULES.modules["revslider2"]!==undefined ? RS_MODULES.modules["revslider2"].once : undefined, init:function() {
	window.revapi2 = window.revapi2===undefined || window.revapi2===null || window.revapi2.length===0  ? document.getElementById("rev_slider_2") : window.revapi2;
	if(window.revapi2 === null || window.revapi2 === undefined || window.revapi2.length==0) { window.revapi2initTry = window.revapi2initTry ===undefined ? 0 : window.revapi2initTry+1; if (window.revapi2initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider2"].init()}); return;}
	window.revapi2 = jQuery(window.revapi2);
	if(window.revapi2.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_2"); return;}
	revapi2.revolutionInit({
			revapi:"revapi2",
			DPR:"dpr",
			sliderLayout:"fullwidth",
			visibilityLevels:"1240,1240,778,480",
			gridwidth:"1230,1230,778,480",
			gridheight:"715,715,550,400",
			lazyType:"smart",
			spinner:"spinner0",
			perspective:600,
			perspectiveType:"local",
			editorheight:"715,768,550,400",
			responsiveLevels:"1240,1240,778,480",
			progressBar:{disableProgressBar:true},
			navigation: {
				mouseScrollNavigation:false,
				wheelCallDelay:1000,
				onHoverStop:false,
				bullets: {
					enable:true,
					tmp:"",
					style:"hermes",
					v_offset:30,
					container:"layergrid"
				}
			},
			viewPort: {
				global:true,
				globalDist:"-200px",
				enable:false,
				visible_area:"20%"
			},
			fallbacks: {
				allowHTML5AutoPlayOnAndroid:true
			},
	});
	
}} // End of RevInitScript
if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};

/* Slider 03 */ 
if(window.RS_MODULES === undefined) window.RS_MODULES = {};
if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["revslider3"] = {once: RS_MODULES.modules["revslider3"]!==undefined ? RS_MODULES.modules["revslider3"].once : undefined, init:function() {
	window.revapi3 = window.revapi3===undefined || window.revapi3===null || window.revapi3.length===0  ? document.getElementById("rev_slider_3") : window.revapi3;
	if(window.revapi3 === null || window.revapi3 === undefined || window.revapi3.length==0) { window.revapi3initTry = window.revapi3initTry ===undefined ? 0 : window.revapi3initTry+1; if (window.revapi3initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider3"].init()}); return;}
	window.revapi3 = jQuery(window.revapi3);
	if(window.revapi3.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_3"); return;}
	revapi3.revolutionInit({
			revapi:"revapi3",
			DPR:"dpr",
			sliderLayout:"fullwidth",
			visibilityLevels:"1240,1240,778,480",
			gridwidth:"1230,1230,778,480",
			gridheight:"810,810,500,300",
			lazyType:"smart",
			spinner:"spinner0",
			perspective:600,
			perspectiveType:"local",
			editorheight:"810,768,500,300",
			responsiveLevels:"1240,1240,778,480",
			progressBar:{disableProgressBar:true},
			navigation: {
				mouseScrollNavigation:false,
				wheelCallDelay:1000,
				onHoverStop:false,
				bullets: {
					enable:true,
					tmp:"",
					style:"hermes",
					h_align:"right",
					v_align:"center",
					h_offset:30,
					v_offset:0,
					direction:"vertical"
				}
			},
			viewPort: {
				global:true,
				globalDist:"-200px",
				enable:false,
				visible_area:"20%"
			},
			fallbacks: {
				allowHTML5AutoPlayOnAndroid:true
			},
	});
	
}} // End of RevInitScript
if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};

/* Slider 04 */ 
if(window.RS_MODULES === undefined) window.RS_MODULES = {};
if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["revslider4"] = {once: RS_MODULES.modules["revslider4"]!==undefined ? RS_MODULES.modules["revslider4"].once : undefined, init:function() {
	window.revapi4 = window.revapi4===undefined || window.revapi4===null || window.revapi4.length===0  ? document.getElementById("rev_slider_4") : window.revapi4;
	if(window.revapi4 === null || window.revapi4 === undefined || window.revapi4.length==0) { window.revapi4initTry = window.revapi4initTry ===undefined ? 0 : window.revapi4initTry+1; if (window.revapi4initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider4"].init()}); return;}
	window.revapi4 = jQuery(window.revapi4);
	if(window.revapi4.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_4"); return;}
	revapi4.revolutionInit({
			revapi:"revapi4",
			DPR:"dpr",
			sliderLayout:"fullwidth",
			visibilityLevels:"1240,1240,778,480",
			gridwidth:"1230,1230,778,480",
			gridheight:"930,930,500,350",
			lazyType:"smart",
			spinner:"spinner0",
			perspective:600,
			perspectiveType:"local",
			editorheight:"930,768,500,350",
			responsiveLevels:"1240,1240,778,480",
			progressBar:{disableProgressBar:true},
			navigation: {
				mouseScrollNavigation:false,
				wheelCallDelay:1000,
				onHoverStop:false,
				bullets: {
					enable:true,
					tmp:"",
					style:"hermes",
					h_align:"right",
					v_align:"center",
					h_offset:30,
					v_offset:0,
					direction:"vertical"
				}
			},
			viewPort: {
				global:true,
				globalDist:"-200px",
				enable:false,
				visible_area:"20%"
			},
			fallbacks: {
				allowHTML5AutoPlayOnAndroid:true
			},
	});
	
}} // End of RevInitScript
if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};

/* Slider 05 */ 
if(window.RS_MODULES === undefined) window.RS_MODULES = {};
if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["revslider5"] = {once: RS_MODULES.modules["revslider5"]!==undefined ? RS_MODULES.modules["revslider5"].once : undefined, init:function() {
	window.revapi5 = window.revapi5===undefined || window.revapi5===null || window.revapi5.length===0  ? document.getElementById("rev_slider_5") : window.revapi5;
	if(window.revapi5 === null || window.revapi5 === undefined || window.revapi5.length==0) { window.revapi5initTry = window.revapi5initTry ===undefined ? 0 : window.revapi5initTry+1; if (window.revapi5initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider5"].init()}); return;}
	window.revapi5 = jQuery(window.revapi5);
	if(window.revapi5.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_5"); return;}
	revapi5.revolutionInit({
			revapi:"revapi5",
			DPR:"dpr",
			sliderLayout:"fullwidth",
			visibilityLevels:"1240,1240,778,480",
			gridwidth:"1230,1230,778,480",
			gridheight:"770,770,500,350",
			lazyType:"smart",
			spinner:"spinner0",
			perspective:600,
			perspectiveType:"local",
			editorheight:"770,768,500,350",
			responsiveLevels:"1240,1240,778,480",
			progressBar:{disableProgressBar:true},
			navigation: {
				mouseScrollNavigation:false,
				wheelCallDelay:1000,
				onHoverStop:false,
				bullets: {
					enable:true,
					tmp:"",
					style:"hermes",
					h_align:"right",
					v_align:"center",
					h_offset:30,
					v_offset:0,
					direction:"vertical"
				}
			},
			viewPort: {
				global:true,
				globalDist:"-200px",
				enable:false,
				visible_area:"20%"
			},
			fallbacks: {
				allowHTML5AutoPlayOnAndroid:true
			},
	});
	
}} // End of RevInitScript
if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};

/* Slider 06 */ 
if(window.RS_MODULES === undefined) window.RS_MODULES = {};
if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["revslider6"] = {once: RS_MODULES.modules["revslider6"]!==undefined ? RS_MODULES.modules["revslider6"].once : undefined, init:function() {
	window.revapi6 = window.revapi6===undefined || window.revapi6===null || window.revapi6.length===0  ? document.getElementById("rev_slider_6") : window.revapi6;
	if(window.revapi6 === null || window.revapi6 === undefined || window.revapi6.length==0) { window.revapi6initTry = window.revapi6initTry ===undefined ? 0 : window.revapi6initTry+1; if (window.revapi6initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider6"].init()}); return;}
	window.revapi6 = jQuery(window.revapi6);
	if(window.revapi6.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_6"); return;}
	revapi6.revolutionInit({
			revapi:"revapi6",
			DPR:"dpr",
			sliderLayout:"fullwidth",
			visibilityLevels:"1240,1024,778,480",
			gridwidth:"1230,1024,778,480",
			gridheight:"890,750,550,400",
			lazyType:"smart",
			spinner:"spinner0",
			perspective:600,
			perspectiveType:"local",
			editorheight:"890,750,550,400",
			responsiveLevels:"1240,1024,778,480",
			progressBar:{disableProgressBar:true},
			navigation: {
				mouseScrollNavigation:false,
				wheelCallDelay:1000,
				onHoverStop:false,
				bullets: {
					enable:true,
					tmp:"",
					style:"hermes",
					h_align:"right",
					v_align:"center",
					h_offset:30,
					v_offset:0,
					direction:"vertical"
				}
			},
			viewPort: {
				global:true,
				globalDist:"-200px",
				enable:false,
				visible_area:"20%"
			},
			fallbacks: {
				allowHTML5AutoPlayOnAndroid:true
			},
	});
	
}} // End of RevInitScript
if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};


/* Slider 07 */
if(window.RS_MODULES === undefined) window.RS_MODULES = {};
if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["revslider7"] = {once: RS_MODULES.modules["revslider7"]!==undefined ? RS_MODULES.modules["revslider7"].once : undefined, init:function() {
	window.revapi7 = window.revapi7===undefined || window.revapi7===null || window.revapi7.length===0  ? document.getElementById("rev_slider_7") : window.revapi7;
	if(window.revapi7 === null || window.revapi7 === undefined || window.revapi7.length==0) { window.revapi7initTry = window.revapi7initTry ===undefined ? 0 : window.revapi7initTry+1; if (window.revapi7initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider7"].init()}); return;}
	window.revapi7 = jQuery(window.revapi7);
	if(window.revapi7.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_7"); return;}
	revapi7.revolutionInit({
			revapi:"revapi7",
			DPR:"dpr",
			sliderLayout:"fullwidth",
			visibilityLevels:"1240,1024,778,480",
			gridwidth:"1230,1024,778,480",
			gridheight:"810,768,500,300",
			lazyType:"smart",
			spinner:"spinner0",
			perspective:600,
			perspectiveType:"local",
			editorheight:"810,768,500,300",
			responsiveLevels:"1240,1024,778,480",
			progressBar:{disableProgressBar:true},
			navigation: {
				mouseScrollNavigation:false,
				wheelCallDelay:1000,
				onHoverStop:false,
				bullets: {
					enable:true,
					tmp:"",
					style:"hermes",
					h_align:"right",
					v_align:"center",
					h_offset:30,
					v_offset:0,
					direction:"vertical"
				}
			},
			viewPort: {
				global:true,
				globalDist:"-200px",
				enable:false,
				visible_area:"20%"
			},
			fallbacks: {
				allowHTML5AutoPlayOnAndroid:true
			},
	});
	
}} // End of RevInitScript
if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};

