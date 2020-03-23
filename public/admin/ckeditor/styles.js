/**
 * Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

// This file contains style definitions that can be used by CKEditor plugins.
//
// The most common use for it is the "stylescombo" plugin which shows the Styles drop-down
// list containing all styles in the editor toolbar. Other plugins, like
// the "div" plugin, use a subset of the styles for their features.
//
// If you do not have plugins that depend on this file in your editor build, you can simply
// ignore it. Otherwise it is strongly recommended to customize this file to match your
// website requirements and design properly.
//
// For more information refer to: https://ckeditor.com/docs/ckeditor4/latest/guide/dev_styles.html#style-rules

CKEDITOR.stylesSet.add( 'default', [
	/* Block styles */
	{ name: 'Format Picture',element: 'img', styles: {'max-width': '100%','width': '600px'}},
	{ name: 'format Icon',element: 'img', styles: { 'max-width': '50%'}},
	{ name: 'khung_dau_bai',element: 'div', styles: {
	    'background-color':'#d6f2f8','padding-left':'10px','padding-top':'10px'
	    ,'padding-right':'10px','padding-bottom':'10px','border': '1.5px dashed #096089',
	    'border-radius':'5px 5px 5px 5px', 'margin-bottom':'10px'}},

	{ name: 'khung_muc-luc',element: 'div', styles: {'padding-left':'20px',
	  'padding-right':'15px','margin-top':'15px','margin-bottom':'15px','padding-top':'9px',
	  'padding-bottom':'8px','height':'auto','max-width':'auto','font-size':'14px !important',
	  'text-align':'left','display':'table','border-radius':'13px','border':'1px solid #00497A'}},

	{ name: 'khung_noi_dung',element: 'div', styles: {'padding-left':'10px','padding-top':'10px'
	    ,'padding-right':'10px','padding-bottom':'10px','border': '1.5px dashed #cd492a',
	    'border-radius':'5px 5px 5px 5px', 'margin-bottom':'10px'}},
	{ name: 'TD_H2',element: 'h2', styles: {'text-transform':'uppercase','color':'#096089',
	    'background-color':'#c3e7ee','padding-left':'15px',
	    'padding-right':'15px','margin-top':'15px','margin-bottom':'15px','padding-top':'5px','padding-bottom':'4px',
	    'height':'auto','max-width':'100%','border-left': '8px solid #096089',
	    'border-right': '8px solid #096089','font-size':'18px !important','font-weight':'bold',
	    'text-align':'center'}},

	{ name: 'tieu_de_muc',element: 'div', styles: {'text-transform':'uppercase','color':'#096089',
	    'background-color':'#c3e7ee','padding-left':'15px',
	    'padding-right':'15px','margin-top':'15px','margin-bottom':'15px','padding-top':'5px','padding-bottom':'4px',
	    'height':'auto','max-width':'100%','border-left': '8px solid #096089',
	    'border-right': '8px solid #096089','font-size':'18px !important','font-weight':'bold',
	    'text-align':'center'}},

	{ name: 'tieu_de_muc2',element: 'div', styles: {'text-transform':'uppercase','color':'#096089',
	    'background-color':'#c3e7ee','padding-left':'15px',
	    'padding-right':'15px','margin-top':'15px','margin-bottom':'15px','padding-top':'5px','padding-bottom':'4px',
	    'height':'auto','max-width':'100%','border-left': '8px solid #096089','font-size':'18px !important'
	    ,'font-weight':'bold'}},

	{ name: 'tieu_de_muc3',element: 'div', styles: {'text-transform':'uppercase','color':'#096089',
	'background-color':'#c3e7ee','padding-left':'15px',
	'padding-right':'15px','margin-top':'15px','margin-bottom':'15px','padding-top':'5px','padding-bottom':'4px',
	'height':'auto','max-width':'100%','font-size':'18px !important','font-weight':'bold','text-align':'center'}},

	{ name: 'khung_nen1',element: 'div', styles: {'color':'#096089',
	'background-color':'#c3e7ee','padding-left':'15px',
	'padding-right':'15px','margin-top':'15px','margin-bottom':'15px','padding-top':'5px',
	'padding-bottom':'4px','height':'auto','max-width':'100%','font-size':'16px !important',
	'text-align':'left'}},
    { name: 'Hình Mắt', element: 'div', attributes: { 'data-target': '.hinhmat_slider','data-toggle':'modal' } },
    { name: 'Hình Mũi', element: 'div', attributes: { 'data-target': '.hinhmui_slider','data-toggle':'modal' } },
    { name: 'Cảm nhận KH', element: 'div', attributes: { 'data-target': '.cnkh_slider','data-toggle':'modal' } },
	{ name: 'Italic Title',		element: 'h2', styles: { 'font-style': 'italic' } },
	{ name: 'Subtitle',			element: 'h3', styles: { 'color': '#aaa', 'font-style': 'italic' } },
	{
		name: 'Special Container',
		element: 'div',
		styles: {
			padding: '5px 10px',
			background: '#eee',
			border: '1px solid #ccc'
		}
	},

	/* Inline styles */

	// These are core styles available as toolbar buttons. You may opt enabling
	// some of them in the Styles drop-down list, removing them from the toolbar.
	// (This requires the "stylescombo" plugin.)
	/*
	{ name: 'Strong',			element: 'strong', overrides: 'b' },
	{ name: 'Emphasis',			element: 'em'	, overrides: 'i' },
	{ name: 'Underline',		element: 'u' },
	{ name: 'Strikethrough',	element: 'strike' },
	{ name: 'Subscript',		element: 'sub' },
	{ name: 'Superscript',		element: 'sup' },
	*/

	{ name: 'Marker',			element: 'span', attributes: { 'class': 'marker' } },

	{ name: 'Big',				element: 'big' },
	{ name: 'Small',			element: 'small' },
	{ name: 'Typewriter',		element: 'tt' },

	{ name: 'Computer Code',	element: 'code' },
	{ name: 'Keyboard Phrase',	element: 'kbd' },
	{ name: 'Sample Text',		element: 'samp' },
	{ name: 'Variable',			element: 'var' },

	{ name: 'Deleted Text',		element: 'del' },
	{ name: 'Inserted Text',	element: 'ins' },

	{ name: 'Cited Work',		element: 'cite' },
	{ name: 'Inline Quotation',	element: 'q' },

	{ name: 'Language: RTL',	element: 'span', attributes: { 'dir': 'rtl' } },
	{ name: 'Language: LTR',	element: 'span', attributes: { 'dir': 'ltr' } },

	/* Object styles */

	{
		name: 'Styled Image (left)',
		element: 'img',
		attributes: { 'class': 'left' }
	},

	{
		name: 'Styled Image (right)',
		element: 'img',
		attributes: { 'class': 'right' }
	},

	{
		name: 'Compact Table',
		element: 'table',
		attributes: {
			cellpadding: '5',
			cellspacing: '0',
			border: '1',
			bordercolor: '#ccc'
		},
		styles: {
			'border-collapse': 'collapse'
		}
	},

	{ name: 'Borderless Table',		element: 'table',	styles: { 'border-style': 'hidden', 'background-color': '#E6E6FA' } },
	{ name: 'Square Bulleted List',	element: 'ul',		styles: { 'list-style-type': 'square' } },

	/* Widget styles */

	{ name: 'Clean Image', type: 'widget', widget: 'image', attributes: { 'class': 'image-clean' } },
	{ name: 'Grayscale Image', type: 'widget', widget: 'image', attributes: { 'class': 'image-grayscale' } },

	{ name: 'Featured Snippet', type: 'widget', widget: 'codeSnippet', attributes: { 'class': 'code-featured' } },

	{ name: 'Featured Formula', type: 'widget', widget: 'mathjax', attributes: { 'class': 'math-featured' } },

	{ name: '240p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-240p' }, group: 'size' },
	{ name: '360p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-360p' }, group: 'size' },
	{ name: '480p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-480p' }, group: 'size' },
	{ name: '720p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-720p' }, group: 'size' },
	{ name: '1080p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-1080p' }, group: 'size' },

	// Adding space after the style name is an intended workaround. For now, there
	// is no option to create two styles with the same name for different widget types. See https://dev.ckeditor.com/ticket/16664.
	{ name: '240p ', type: 'widget', widget: 'embed', attributes: { 'class': 'embed-240p' }, group: 'size' },
	{ name: '360p ', type: 'widget', widget: 'embed', attributes: { 'class': 'embed-360p' }, group: 'size' },
	{ name: '480p ', type: 'widget', widget: 'embed', attributes: { 'class': 'embed-480p' }, group: 'size' },
	{ name: '720p ', type: 'widget', widget: 'embed', attributes: { 'class': 'embed-720p' }, group: 'size' },
	{ name:'1080p ', type: 'widget', widget: 'embed', attributes: { 'class': 'embed-1080p' }, group: 'size' }

] );

