import * as exported from './exported.js'

let lightColorChange = document.querySelector('.color-primary-light')
lightColorChange?.addEventListener('input', changePrimaryColor)
let darkColorChange = document.querySelector('.color-primary-dark')
darkColorChange?.addEventListener('input', darkPrimaryColor)
let transparentPrimaryColorChange = document.querySelector('.color-primary-transparent')
transparentPrimaryColorChange?.addEventListener('input', transparentPrimaryColor)
let transparentBgColorChange = document.querySelector('.color-bg-transparent')
transparentBgColorChange?.addEventListener('input', transparentBgColor)
let transparentImgBgColorChange = document.querySelector('.color-bgImg-transparent')
transparentImgBgColorChange?.addEventListener('input', transparentBgImgPrimaryColor)

let bgImageFn = document.querySelectorAll('.bg-img')
bgImageFn.forEach((e,i)=>{
    e?.addEventListener('click', function(el){
        bgImage(this);
    })
})



const handleThemeUpdate = (cssVars) => {
    const root = document.querySelector(':root');
    const keys = Object.keys(cssVars);
    keys.forEach(key => {
        root.style.setProperty(key, cssVars[key]);
    });
}

function themeSwitch(switchProperty){
	switchProperty.forEach((item) => {
		item.addEventListener('click', (e) => {
			const primaryColor = e.target.getAttribute('data-bg-color')
			const primaryHoverColor = e.target.getAttribute('data-bg-hover')
			const primaryBorderColor = e.target.getAttribute('data-bg-border')
			const primaryTransparent = e.target.getAttribute('data-bg-transparent')
			const darkPrimary = e.target.getAttribute('data-primary')
			const darkprimaryTransparent = e.target.getAttribute('data-bg-darktransparent')
			const transparentPrimary = e.target.getAttribute('data-primary')
			const transparentBgColor = e.target.getAttribute('data-body')
			const transparentBgTheme = e.target.getAttribute('data-theme')
			const transparentprimaryTransparent = e.target.getAttribute('data-transparentcolor')

			handleThemeUpdate({
				'--primary-bg-color': primaryColor,
				'--primary-bg-hover': primaryHoverColor,
				'--primary-bg-border': primaryBorderColor,
				'--primary-transparentcolor': primaryTransparent,
				'--dark-primary': darkPrimary,
				'--darkprimary-transparentcolor': darkprimaryTransparent,
				'--transparent-primary': transparentPrimary,
				'--transparent-body': transparentBgColor,
				'--transparent-theme': transparentBgTheme,
				'--transparentprimary-transparentcolor': transparentprimaryTransparent,
			});

			$("input.input-color-picker[data-id='bg-color']").val(primaryColor)
			$("input.input-color-picker[data-id1='bg-hover']").val(primaryColor)
			$("input.input-color-picker[data-id2='bg-border']").val(primaryColor)
			$("input.input-color-picker[data-id7='transparentcolor']").val(primaryColor)
			$("input.input-color-picker[data-id3='primary']").val(darkPrimary)
			$("input.input-color-picker[data-id8='transparentcolor']").val(darkPrimary)
			$("input.input-color-picker[data-id4='primary']").val(transparentPrimary)
			$("input.input-color-picker[data-id5='body']").val(transparentBgColor)
			$("input.input-color-picker[data-id6='theme']").val(transparentBgTheme)
			$("input.input-color-picker[data-id9='transparentcolor']").val(transparentPrimary)
		});
	});
}

function dynamicPrimaryColor(primaryColor){
    primaryColor.forEach((item) => {
		item.addEventListener('input', (e) => {
			const cssPropName = `--primary-${e.target.getAttribute('data-id')}`;
			const cssPropName1 = `--primary-${e.target.getAttribute('data-id1')}`;
			const cssPropName2 = `--primary-${e.target.getAttribute('data-id2')}`;
			const cssPropName7 = `--primary-${e.target.getAttribute('data-id7')}`;
			const cssPropName8 = `--darkprimary-${e.target.getAttribute('data-id8')}`;
			const cssPropName3 = `--dark-${e.target.getAttribute('data-id3')}`;
			const cssPropName4 = `--transparent-${e.target.getAttribute('data-id4')}`;
			const cssPropName5 = `--transparent-${e.target.getAttribute('data-id5')}`;
			const cssPropName6 = `--transparent-${e.target.getAttribute('data-id6')}`;
			const cssPropName9 = `--transparentprimary-${e.target.getAttribute('data-id9')}`;
			handleThemeUpdate({
				[cssPropName]: exported.hexToRgba(e.target.value),
				 // 95 is used as the opacity 0.95
				[cssPropName1]:  exported.hexToRgba(e.target.value, 0.99),
				[cssPropName2]: exported.hexToRgba(e.target.value, 0.2),
				[cssPropName3]: exported.hexToRgba(e.target.value),
				[cssPropName7]: exported.hexToRgba(e.target.value, 0.2),
				[cssPropName8]: exported.hexToRgba(e.target.value, 0.2),
				[cssPropName4]: e.target.value,
				[cssPropName5]: e.target.value,
				[cssPropName6]: e.target.value + 95,
				[cssPropName9]: e.target.value + 20,
			});
		});
	});
}

(function () {
	// Light theme color picker
	const LightThemeSwitchers = document.querySelectorAll('.light-theme .switch_section span');
	const dynamicPrimaryLight = document.querySelectorAll('input.color-primary-light');

    themeSwitch(LightThemeSwitchers);
    dynamicPrimaryColor(dynamicPrimaryLight);

    // dark theme color picker

    const DarkThemeSwitchers = document.querySelectorAll('.dark-theme .switch_section span')
	const DarkDynamicPrimaryLight = document.querySelectorAll('input.color-primary-dark');

    themeSwitch(DarkThemeSwitchers);
    dynamicPrimaryColor(DarkDynamicPrimaryLight);

	// tranparent theme color picker

    const transparentThemeSwitchers = document.querySelectorAll('.transparent-theme .switch_section span')
	const transparentDynamicPrimaryLight = document.querySelectorAll('input.color-primary-transparent');

    themeSwitch(transparentThemeSwitchers);
    dynamicPrimaryColor(transparentDynamicPrimaryLight);

	// tranparent theme bgcolor picker

    const transparentBgThemeSwitchers = document.querySelectorAll('.transparent-theme .switch_section span')
	const transparentDynamicPBgLight = document.querySelectorAll('input.color-bg-transparent');

    themeSwitch(transparentBgThemeSwitchers);
    dynamicPrimaryColor(transparentDynamicPBgLight);

	exported.localStorageBackup();

	$('#myonoffswitch1').on('click', function(){
		document.querySelector('body')?.classList.remove('dark-theme');
		document.querySelector('body')?.classList.remove('transparent-theme');
		document.querySelector('body')?.classList.remove('bg-img1');
		document.querySelector('body')?.classList.remove('bg-img2');
		document.querySelector('body')?.classList.remove('bg-img3');
		document.querySelector('body')?.classList.remove('bg-img4');

		localStorage.removeItem('BgImage');
		$('#myonoffswitch1').prop('checked', true);
	})
	$('#myonoffswitch2').on('click', function(){
	document.querySelector('body')?.classList.remove('light-theme');
	document.querySelector('body')?.classList.remove('transparent-theme');
	document.querySelector('body')?.classList.remove('bg-img1');
	document.querySelector('body')?.classList.remove('bg-img2');
	document.querySelector('body')?.classList.remove('bg-img3');
	document.querySelector('body')?.classList.remove('bg-img4');

	localStorage.removeItem('BgImage');
	$('#myonoffswitch2').prop('checked', true);
	})
	$('#myonoffswitchTransparent').on('click', function(){
	document.querySelector('body')?.classList.remove('dark-theme');
	document.querySelector('body')?.classList.remove('light-theme');
	document.querySelector('body')?.classList.remove('bg-img1');
	document.querySelector('body')?.classList.remove('bg-img2');
	document.querySelector('body')?.classList.remove('bg-img3');
	document.querySelector('body')?.classList.remove('bg-img4');

	localStorage.removeItem('BgImage');
	$('#myonoffswitchTransparent').prop('checked', true);
	})

})();



function changePrimaryColor() {
    $('#myonoffswitch3').prop('checked', true);
    $('#myonoffswitch6').prop('checked', true);
     exported.checkOptions();

	let userColor = document.getElementById('colorID').value;
	localStorage.setItem('primaryColor', userColor);
	// to store value as opacity 0.95 we use 95
	localStorage.setItem('primaryHoverColor', userColor + 99);
	localStorage.setItem('primaryBorderColor', userColor + 20);
	localStorage.setItem('primaryTransparent', userColor + 20);

	// removing dark theme properties
	localStorage.removeItem('darkPrimary')
	localStorage.removeItem('darkprimaryTransparent');
	localStorage.removeItem('transparentBgColor');
	localStorage.removeItem('transparentThemeColor');
	localStorage.removeItem('transparentPrimary');
	localStorage.removeItem('transparentprimaryTransparent');
    localStorage.removeItem('transparentBgImgPrimary');
	localStorage.removeItem('transparentBgImgprimaryTransparent');
	document.querySelector('body')?.classList.add('light-theme');
	document.querySelector('body')?.classList.remove('dark-theme');
	document.querySelector('body')?.classList.remove('transparent-theme');
	document.querySelector('body')?.classList.remove('bg-img2');
	localStorage.removeItem('BgImage');

	$('#myonoffswitch1').prop('checked', true);
	 exported.names()
}

function darkPrimaryColor() {

	$('#myonoffswitch2').prop('checked', true);
	$('#myonoffswitch5').prop('checked', true);
    $('#myonoffswitch8').prop('checked', true);
     exported.checkOptions();
	let userColor = document.getElementById('darkPrimaryColorID').value;
	localStorage.setItem('darkPrimary', userColor);
	localStorage.setItem('darkprimaryTransparent', userColor+20);
	document.querySelector('body')?.classList.add('dark-theme');

    // removing light theme data
	localStorage.removeItem('primaryColor')
	localStorage.removeItem('primaryHoverColor')
	localStorage.removeItem('primaryBorderColor')
	localStorage.removeItem('primaryTransparent');

	localStorage.removeItem('transparentBgColor');
	localStorage.removeItem('transparentThemeColor');
	localStorage.removeItem('transparentPrimary');
	localStorage.removeItem('transparentprimaryTransparent');
    localStorage.removeItem('transparentBgImgPrimary');
	localStorage.removeItem('transparentBgImgprimaryTransparent');
	localStorage.removeItem('BgImage');

	document.querySelector('body')?.classList.remove('light-theme');
	document.querySelector('body')?.classList.remove('transparent-theme');
	document.querySelector('body')?.classList.remove('bg-img1');
	document.querySelector('body')?.classList.remove('bg-img2');
	document.querySelector('body')?.classList.remove('bg-img3');
	document.querySelector('body')?.classList.remove('bg-img4');

	 exported.names();
}

function transparentPrimaryColor() {
	$('#myonoffswitch3').prop('checked', false);
    $('#myonoffswitch6').prop('checked', false);
    $('#myonoffswitch5').prop('checked', false);
    $('#myonoffswitch8').prop('checked', false);

	let userColor = document.getElementById('transparentPrimaryColorID').value;
	localStorage.setItem('transparentPrimary', userColor);
	localStorage.setItem('transparentprimaryTransparent', userColor+20);

    // removing light theme data
	localStorage.removeItem('darkPrimary');
	localStorage.removeItem('darkprimaryTransparent');
	localStorage.removeItem('primaryColor');
	localStorage.removeItem('primaryHoverColor');
	localStorage.removeItem('primaryBorderColor');
	localStorage.removeItem('primaryTransparent');
    localStorage.removeItem('transparentBgImgPrimary');
	localStorage.removeItem('transparentBgImgprimaryTransparent');
	document.querySelector('body').classList.add('transparent-theme');
	document.querySelector('body')?.classList.remove('light-theme');
	document.querySelector('body')?.classList.remove('dark-theme');
	document.querySelector('body')?.classList.remove('bg-img1');
	document.querySelector('body')?.classList.remove('bg-img2');
	document.querySelector('body')?.classList.remove('bg-img3');
	document.querySelector('body')?.classList.remove('bg-img4');

	$('#myonoffswitchTransparent').prop('checked', true);
     exported.checkOptions();
	 exported.removeForTransparent();
	 exported.names()
}

function transparentBgImgPrimaryColor() {
	$('#myonoffswitch3').prop('checked', false);
    $('#myonoffswitch6').prop('checked', false);
    $('#myonoffswitch5').prop('checked', false);
    $('#myonoffswitch8').prop('checked', false);
	let userColor = document.getElementById('transparentBgImgPrimaryColorID').value;
	localStorage.setItem('transparentBgImgPrimary', userColor);
	localStorage.setItem('transparentBgImgprimaryTransparent', userColor+20);
	if(
		document.querySelector('body')?.classList.contains('bg-img1') == false &&
		document.querySelector('body')?.classList.contains('bg-img2') == false &&
		document.querySelector('body')?.classList.contains('bg-img3') == false &&
		document.querySelector('body')?.classList.contains('bg-img4') == false
		){
		document.querySelector('body')?.classList.add('bg-img1');
		localStorage.setItem('BgImage', 'bg-img1');
	}
    // removing light theme data
	localStorage.removeItem('darkPrimary');
	localStorage.removeItem('darkprimaryTransparent');
	localStorage.removeItem('primaryColor')
	localStorage.removeItem('primaryHoverColor')
	localStorage.removeItem('primaryBorderColor')
	localStorage.removeItem('primaryTransparent');
	localStorage.removeItem('darkprimaryTransparent');
	localStorage.removeItem('transparentPrimary')
	localStorage.removeItem('transparentprimaryTransparent');
	document.querySelector('body').classList.add('transparent-theme');
	document.querySelector('body')?.classList.remove('light-theme');
	document.querySelector('body')?.classList.remove('dark-theme');

	$('#myonoffswitchTransparent').prop('checked', true);
     exported.checkOptions();
	 exported.removeForTransparent();
	 exported.names()
}


function transparentBgColor() {
    $('#myonoffswitch3').prop('checked', false);
    $('#myonoffswitch6').prop('checked', false);
    $('#myonoffswitch5').prop('checked', false);
    $('#myonoffswitch8').prop('checked', false);

	let userColor = document.getElementById('transparentBgColorID').value;
	localStorage.setItem('transparentBgColor', userColor);
	localStorage.setItem('transparentThemeColor', userColor+95);
	localStorage.setItem('transparentprimaryTransparent', userColor+20);

    // removing light theme data
	localStorage.removeItem('darkPrimary');
	localStorage.removeItem('darkprimaryTransparent');
	localStorage.removeItem('primaryColor')
	localStorage.removeItem('primaryHoverColor')
	localStorage.removeItem('primaryBorderColor')
	localStorage.removeItem('primaryTransparent');
    localStorage.removeItem('transparentBgImgPrimary');
	localStorage.removeItem('transparentBgImgprimaryTransparent');
	localStorage.removeItem('BgImage');
	document.querySelector('body').classList.add('transparent-theme');
	document.querySelector('body')?.classList.remove('light-theme');
	document.querySelector('body')?.classList.remove('dark-theme');
	document.querySelector('body')?.classList.remove('bg-img1');
	document.querySelector('body')?.classList.remove('bg-img2');
	document.querySelector('body')?.classList.remove('bg-img3');
	document.querySelector('body')?.classList.remove('bg-img4');

	$('#myonoffswitchTransparent').prop('checked', true);
     exported.checkOptions();
	 exported.removeForTransparent();
}

function bgImage(e) {

    $('#myonoffswitch3').prop('checked', false);
    $('#myonoffswitch6').prop('checked', false);
    $('#myonoffswitch5').prop('checked', false);
    $('#myonoffswitch8').prop('checked', false);
	let imgID = e.getAttribute('class');
	localStorage.setItem('BgImage', imgID);

    // removing light theme data
	localStorage.removeItem('darkPrimary');
	localStorage.removeItem('darkprimaryTransparent');
	localStorage.removeItem('primaryColor')
	localStorage.removeItem('transparentBgColor');
	localStorage.removeItem('transparentThemeColor');
	localStorage.removeItem('transparentprimaryTransparent');
	document.querySelector('body').classList.add('transparent-theme');
	document.querySelector('body')?.classList.remove('light-theme');
	document.querySelector('body')?.classList.remove('dark-theme');

	$('#myonoffswitchTransparent').prop('checked', true);
     exported.checkOptions();
	 exported.removeForTransparent();
}
let resetData = document.querySelector('.resetCustomStyles')
resetData?.addEventListener('click',()=>{
    localStorage.clear();
    document.querySelector('html').style = '';
     exported.names() ;
	$('#myonoffswitch1').prop('checked', true);
	$('#myonoffswitch3').prop('checked', true);
	$('#myonoffswitch6').prop('checked', true);
	$('#myonoffswitch9').prop('checked', true);
	$('#myonoffswitch10').prop('checked', false);
	$('#myonoffswitch11').prop('checked', true);
	$('#myonoffswitch12').prop('checked', false);
	$('#myonoffswitch13').prop('checked', true);
	$('#myonoffswitch14').prop('checked', false);
	$('#myonoffswitch15').prop('checked', false);
	$('#myonoffswitch16').prop('checked', false);
	$('#myonoffswitch17').prop('checked', false);
	$('#myonoffswitch18').prop('checked', false);
	$('body')?.removeClass('bg-img4');
	$('body')?.removeClass('bg-img1');
	$('body')?.removeClass('bg-img2');
	$('body')?.removeClass('bg-img3');
	$('body')?.removeClass('transparent-theme');
	$('body')?.removeClass('dark-theme');
	$('body')?.removeClass('dark-menu');
	$('body')?.removeClass('light-menu');
	$('body')?.removeClass('color-menu');
	$('body')?.removeClass('dark-header');
	$('body')?.removeClass('light-header');
	$('body')?.removeClass('color-header');
	$('body')?.removeClass('layout-boxed');
	$('body')?.removeClass('icontext-menu');
	$('body')?.removeClass('sideicon-menu');
	$('body')?.removeClass('closed-menu');
	$('body')?.removeClass('hover-submenu');
	$('body')?.removeClass('hover-submenu1');
	$('body')?.removeClass('scrollable-layout');
	$('body')?.removeClass('sidenav-toggled');
})


