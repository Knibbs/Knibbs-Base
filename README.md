<a href="http://www.knibbs.co.uk"><img src="http://www.knibbs.co.uk/images/knibbs_200x67.jpg" alt="Knibbs Logo" width="200" height="67"></a>

# Knibbs Base Framework

This is a base framework created by [Knibbs](http://www.knibbs.co.uk) for use as a base starter template.

The Framework has taken elements from a number of different sources including:
- Gumby Framewrok
- Nicolas Gallagher's micro clearfix
- Typeplate
- Font Awesome
- Html5 Boilerplate

To all be combined into a super base framework to kickstart any web application.

# Key CSS useful snippets

## Images

**1. Circle Images**
Attach 'image circle' to your img class for circled images
		`<img class="image circle" src"..." alt"...">`
	
**2. Rounded Images** 
Attach 'image rounded' to your img class for a 4px rounded image
		`<img class="image rounded" src"..." alt"...">`
	
**3. Photo Images** 
Attach 'image photo' to your img class for a drop shadowed photo image
		`<img class="image photo" src"..." alt"...">`

## Responsive displays

**1. Screen None**
Will hide the div content on screen but will show on @media only screen and (max-width: 48em)  
		`<div class="screen_none">...</div>`

**2. Hide Mobile**
Will hide the div content on a @media only screen and (max-width: 48em) 
		`<div class="hide_mobile">...</div>`
	
## Layout & Alignment

**1. Float Left** 
		`<div class="float_left">...</div>`

**2. Float Right** 
		`<div class="float_right">...</div>`

**3. Align Left** 
		`<div class="align_left">...</div>`

**4. Align Right** 
		`<div class="align_right">...</div>`

**5. Align Center**
		`<div class="align_center">...</div>`

**6. Align Justify** 
	`<div class="align_justify">...</div>`
	
## Typography
The Typography is all based on the typeplate framework using rem values to specify the font-size. Here shows the following markup for heaidngs:

	.tera {font-size: 117px; font-size: 6.5rem; margin-bottom: 0.25385rem;}
	.giga {font-size: 90px; font-size: 5rem; margin-bottom: 0.33rem;}
	.mega {font-size: 72px; font-size: 4rem; margin-bottom: 0.4125rem;}

	h1, .alpha {font-size: 60px;font-size: 3.33333rem; margin-bottom: 0.495rem;}
	h2, .beta {font-size: 48px;font-size: 2.66667rem;margin-bottom: 0.61875rem;}
	h3, .gamma {font-size: 36px;font-size: 2rem;margin-bottom: 0.825rem;}
	h4, .delta {font-size: 24px;font-size: 1.33333rem;margin-bottom: 1.2375rem;}
	h5, .epsilon {font-size: 21px;font-size: 1.16667rem;margin-bottom: 1.41429rem;}
	h6, .zeta {font-size: 18px;font-size: 1rem;margin-bottom: 1.65rem;}
	
	p.into { font-size: 17.5px; font-size: 1.09375rem; margin-bottom: 18px;} /* INTRO TEXT */

## Typographic Elements
Also included are certain useful typographic elements:

- Drop Caps
- Lining Definition
- Dictionary Definition
- Stats Tab
- Blockquotes
- Pull Quotes

## Icons
The framework also includes the full list of icons created by [font awesome] (http://fortawesome.github.io/Font-Awesome/).

# Using the CSS
To reduce the amount of http requests try inserting all your custom css which you will build on top of the base framework under the `Site Specific` comment within the `base.css`.
