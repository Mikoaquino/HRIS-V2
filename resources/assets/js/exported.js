// hexa to rgba convertion


// to check the value is hexa or not
const isValidHex = (hexValue) => /^#([A-Fa-f0-9]{3,4}){1,2}$/.test(hexValue)

const getChunksFromString = (st, chunkSize) => st.match(new RegExp(`.{${chunkSize}}`, "g"))
// convert hex value to 256
const convertHexUnitTo256 = (hexStr) => parseInt(hexStr.repeat(2 / hexStr.length), 16)
// get alpha value is equla to 1 if there was no value is asigned to alpha in function
const getAlphafloat = (a, alpha) => {
    if (typeof a !== "undefined") { return a / 255 }
    if ((typeof alpha != "number") || alpha < 0 || alpha > 1) {
        return 1
    }
    return alpha
}
// convertion of hex code to rgba code
export function hexToRgba(hexValue, alpha) {
    if (!isValidHex(hexValue)) { return null }
    const chunkSize = Math.floor((hexValue.length - 1) / 3)
    const hexArr = getChunksFromString(hexValue.slice(1), chunkSize)
    const [r, g, b, a] = hexArr.map(convertHexUnitTo256)
    return `rgba(${r}, ${g}, ${b}, ${getAlphafloat(a, alpha)})`
}

// checkoptions

export function checkOptions(){
    // light header
    if( document.querySelector('body').classList.contains('header-light')){
        $('#myonoffswitch6').prop('checked', true);
    }
    // color header
    if(document.querySelector('body').classList.contains('color-header')){
        $('#myonoffswitch7').prop('checked', true);
    }
    // gradient header
    if(document.querySelector('body').classList.contains('gradient-header')){
        $('#myonoffswitch26').prop('checked', true);
    }
    // dark header
    if(document.querySelector('body').classList.contains('dark-header')){
        $('#myonoffswitch8').prop('checked', true);
    }

    // light menu
    if(document.querySelector('body').classList.contains('light-menu')){
        $('#myonoffswitch3').prop('checked', true);
    }
    // color menu
    if(document.querySelector('body').classList.contains('color-menu')){
        $('#myonoffswitch4').prop('checked', true);
    }
    // gradient menu
    if(document.querySelector('body').classList.contains('gradient-menu')) {
        $('#myonoffswitch25').prop('checked', true);
    }
    // dark menu
    if(document.querySelector('body').classList.contains('dark-menu')) {
        $('#myonoffswitch5').prop('checked', true);
    }
}


// checkoptions end

// remove transparent

export function removeForTransparent(){
	if( document.querySelector('body').classList.contains('header-light')){
        document.querySelector('body').classList.remove('header-light')
    }
    // color header
    if(document.querySelector('body').classList.contains('color-header')){
        document.querySelector('body').classList.remove('color-header')
    }
    // gradient header
    if(document.querySelector('body').classList.contains('gradient-header')){
        document.querySelector('body').classList.remove('gradient-header')
    }
    // dark header
    if(document.querySelector('body').classList.contains('dark-header')){
        document.querySelector('body').classList.remove('dark-header')
    }

    // light menu
    if(document.querySelector('body').classList.contains('light-menu')){
        document.querySelector('body').classList.remove('light-menu')
    }
    // color menu
    if(document.querySelector('body').classList.contains('color-menu')){
        document.querySelector('body').classList.remove('color-menu')
    }
    // gradient menu
    if(document.querySelector('body').classList.contains('gradient-menu')) {
        document.querySelector('body').classList.remove('gradient-menu')
    }
    // dark menu
    if(document.querySelector('body').classList.contains('dark-menu')) {
        document.querySelector('body').classList.remove('dark-menu')
    }
}

// remove transparent end


//names()


// chart colors
var myVarVal, myVarVal1;
export function names(){

    let primaryColorVal = getComputedStyle(document.documentElement).getPropertyValue('--primary-bg-color').trim();
	//get variable
	myVarVal  =  localStorage.getItem("primaryColor") || localStorage.getItem("darkPrimary") || localStorage.getItem("transparentPrimary") || localStorage.getItem("transparentBgImgPrimary") || primaryColorVal;
	myVarVal1 =  hexToRgba(localStorage.getItem("primaryColor"),0.8) || hexToRgba(localStorage.getItem("darkPrimary"),0.8) || hexToRgba(localStorage.getItem("transparentPrimary"),0.8) || hexToRgba(localStorage.getItem("transparentBgImgPrimary"),0.8) || null;

	// For index.html
	if(document.querySelector('#statistics1') !== null){
        setTimeout(()=>{
            statistics1();
        },1000)
    }

	if(document.querySelector('#Viewers') !== null){
		viewers();
	}
	if(document.querySelector('.chart-circle') !== null){
		chartCircle();
	}

	// For index1.html
	if(document.querySelector('#statistics2') !== null){
        statistics2();
    }
	if(document.querySelector('#budget') !== null){
		budget();
	}
	if(document.querySelector('#Viewers1') !== null){
		viewers1();
	}

	// For index2.html
	if(document.querySelector('#statistics3') !== null){
        statistics3();
    }
	if(document.querySelector('#Viewers2') !== null){
		viewers2();
	}


    let colorData = hexToRgba(myVarVal || primaryColorVal, 0.1)
    document.querySelector('html').style.setProperty('--primary01', colorData);

    let colorData1 = hexToRgba(myVarVal || primaryColorVal, 0.2)
    document.querySelector('html').style.setProperty('--primary02', colorData1);

    let colorData2 = hexToRgba(myVarVal || primaryColorVal, 0.3)
    document.querySelector('html').style.setProperty('--primary03', colorData2);

    let colorData3 = hexToRgba(myVarVal || primaryColorVal, 0.6)
    document.querySelector('html').style.setProperty('--primary06', colorData3);

    let colorData4 = hexToRgba(myVarVal || primaryColorVal, 0.9)
    document.querySelector('html').style.setProperty('--primary09', colorData4);

}
names()

// localStorageBackup

export function localStorageBackup(){
	// if there is a value stored, update color picker and background color
	// Used to retrive the data from local storage
	if (localStorage.primaryColor) {
		// document.getElementById('colorID').value = localStorage.primaryColor;
		document.querySelector('html').style.setProperty('--primary-bg-color', localStorage.primaryColor);
		document.querySelector('html').style.setProperty('--primary-bg-hover', localStorage.primaryHoverColor);
		document.querySelector('html').style.setProperty('--primary-bg-border', localStorage.primaryBorderColor);
		document.querySelector('html').style.setProperty('--primary-transparentcolor', localStorage.primaryTransparent);
		document.querySelector('body')?.classList.add('light-theme');
		document.querySelector('body')?.classList.remove('dark-theme');
		document.querySelector('body')?.classList.remove('transparent-theme');
		document.querySelector('body')?.classList.remove('bg-img2');

		$('#myonoffswitch1').prop('checked', true);


	}

	if (localStorage.darkPrimary) {
		// document.getElementById('darkPrimaryColorID').value = localStorage.darkPrimary;
		document.querySelector('html').style.setProperty('--primary-bg-color', localStorage.darkPrimary);
		document.querySelector('html').style.setProperty('--primary-bg-hover', localStorage.darkPrimary);
		document.querySelector('html').style.setProperty('--primary-bg-border', localStorage.darkPrimary);
		document.querySelector('html').style.setProperty('--dark-primary', localStorage.darkPrimary);
		document.querySelector('html').style.setProperty('--darkprimary-transparentcolor', localStorage.darkprimaryTransparent);
		document.querySelector('body')?.classList.add('dark-theme');
		document.querySelector('body')?.classList.remove('light-theme');
		document.querySelector('body')?.classList.remove('transparent-theme');
		document.querySelector('body')?.classList.remove('bg-img2');

		$('#myonoffswitch2').prop('checked', true);

	}

	if (localStorage.transparentPrimary) {
		// document.getElementById('transparentPrimaryColorID').value = localStorage.transparentPrimary;
		document.querySelector('html').style.setProperty('--primary-bg-color', localStorage.transparentPrimary);
		document.querySelector('html').style.setProperty('--primary-bg-hover', localStorage.transparentPrimary);
		document.querySelector('html').style.setProperty('--primary-bg-border', localStorage.transparentPrimary);
		document.querySelector('html').style.setProperty('--transparent-primary', localStorage.transparentPrimary);
		document.querySelector('html').style.setProperty('--transparentprimary-transparentcolor', localStorage.transparentprimaryTransparent);
		document.querySelector('body')?.classList.add('transparent-theme');
		document.querySelector('body')?.classList.remove('dark-theme');
		document.querySelector('body')?.classList.remove('light-theme');
		document.querySelector('body')?.classList.remove('bg-img2');

		$('#myonoffswitchTransparent').prop('checked', true);
	}

	if (localStorage.transparentBgImgPrimary) {
		// document.getElementById('transparentBgImgPrimaryColorID').value = localStorage.transparentBgImgPrimary;
		document.querySelector('html').style.setProperty('--primary-bg-color', localStorage.transparentBgImgPrimary);
		document.querySelector('html').style.setProperty('--primary-bg-hover', localStorage.transparentBgImgPrimary);
		document.querySelector('html').style.setProperty('--primary-bg-border', localStorage.transparentBgImgPrimary);
		document.querySelector('html').style.setProperty('--transparent-primary', localStorage.transparentBgImgPrimary);
		document.querySelector('html').style.setProperty('--transparentprimary-transparentcolor', localStorage.transparentBgImgprimaryTransparent);
		document.querySelector('body')?.classList.add('transparent-theme');
		document.querySelector('body')?.classList.remove('dark-theme');
		document.querySelector('body')?.classList.remove('light-theme');

		$('#myonoffswitchTransparent').prop('checked', true);
	}

    if (localStorage.transparentBgColor) {
		// document.getElementById('transparentBgColorID').value = localStorage.transparentBgColor;
		document.querySelector('html').style.setProperty('--transparent-body', localStorage.transparentBgColor);
		document.querySelector('html').style.setProperty('--transparent-theme', localStorage.transparentThemeColor);
		document.querySelector('html').style.setProperty('--transparentprimary-transparentcolor', localStorage.transparentprimaryTransparent);
		document.querySelector('body')?.classList.add('transparent-theme');
		document.querySelector('body')?.classList.remove('dark-theme');
		document.querySelector('body')?.classList.remove('light-theme');
		document.querySelector('body')?.classList.remove('bg-img2');

		$('#myonoffswitchTransparent').prop('checked', true);
	}
	if (localStorage.BgImage) {
		document.querySelector('body')?.classList.add('transparent-theme');
		document.querySelector('body')?.classList.remove('dark-theme');
		document.querySelector('body')?.classList.remove('light-theme');
		if(document.querySelector('body')?.classList.add(localStorage.BgImage.split(' ')[0]) !== "bg-img2"){
			document.querySelector('body').classList.remove('bg-img2')
		}
		document.querySelector('body')?.classList.add(localStorage.BgImage.split(' ')[0]);
		$('#myonoffswitchTransparent').prop('checked', true);
	}
}

// localStorageBackup end


var ApexCharts = require('./apexcharts.js');
// charts
function chartCircle() {
	// ______________Chart-circle
	if ($('.chart-circle').length) {
		$('.chart-circle').each(function() {
			let $this = $(this);
			$this.circleProgress({
				fill: {
					color:  myVarVal || "#38cab3",
				},
				size: $this.height(),
				startAngle: -Math.PI / 4 * 2,
				emptyFill: 'transparent',
				lineCap: 'round'
			});
		});
	}
}

// Project Budget chart //
function statistics1() {

    var options1 = {
        series: [{
            name: 'Total Orders',
            data: [44, 42, 57, 86, 58, 55, 70, 43, 23, 54, 77, 34],
        },{
            name: 'Total Sales',
            data: [34, 22, 37, 56, 21, 35, 60, 34, 56, 78, 89,53],
        }],
        chart: {
            type: 'bar',
            height: 280
        },
        grid: {
            borderColor: '#f2f6f7',
        },
        colors: [ myVarVal || "#38cab3","#e4e7ed"],
        plotOptions: {
            bar: {
                colors: {
                    ranges: [{
                        from: -100,
                        to: -46,
                        color: '#ebeff5'
                    }, {
                        from: -45,
                        to: 0,
                        color: '#ebeff5'
        }]
        },
        columnWidth: '40%',
    }
},
dataLabels: {
    enabled: false,
},
stroke: {
    show: true,
    width: 4,
    colors: ['transparent']
},
legend: {
    show: true,
    position:'top',
},
yaxis: {
    title: {
        text: 'Growth',
        style: {
            color: '#adb5be',
            fontSize: '14px',
            fontFamily: 'poppins, sans-serif',
            fontWeight: 600,
            cssClass: 'apexcharts-yaxis-label',
        },
    },
    labels: {
        formatter: function (y) {
            return y.toFixed(0) + "";
        }
    }
},
xaxis: {
    type: 'month',
    categories: ['Jan','Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'sep', 'oct', 'nov', 'dec'],
    axisBorder: {
        show: true,
        color: 'rgba(119, 119, 142, 0.05)',
        offsetX: 0,
        offsetY: 0,
    },
    axisTicks: {
        show: true,
        borderType: 'solid',
        color: 'rgba(119, 119, 142, 0.05)',
        width: 6,
        offsetX: 0,
        offsetY: 0
    },
    labels: {
        rotate: -90
    }
}
    };
    document.getElementById('statistics1').innerHTML = '';
    var chart1 = new ApexCharts(document.querySelector("#statistics1"), options1);
    chart1.render();

}

//Visitors chart
function viewers() {
	setTimeout(()=>{
		var options2 = {
			series: [{
				name: 'Male',
				data: [51, 44, 55, 42, 58,50, 62],
			},{
				name: 'Female',
				data: [56, 58, 38, 50, 64,45, 55]
			}],
			chart: {
			height: 315,
			type: 'line',
			toolbar: {
				show: false,
				},
				background: 'none',
				fill:"#fff",
			},
			grid: {
			borderColor: '#f2f6f7',
			},
			colors: [ myVarVal || "#38cab3", "#e4e7ed"],
			background: 'transparent',
			dataLabels: {
			enabled: false
			},
			stroke: {
			curve: 'smooth',
			width:2
			},
			xaxis: {
			type: 'day',
			categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"]
			},
			dataLabels: {
			enabled: false,
			},
			legend: {
			show: true,
			position:'top',
			},
		xaxis: {
			show:false,
			axisBorder: {
						show: false,
						color: 'rgba(119, 119, 142, 0.05)',
						offsetX: 0,
						offsetY: 0,
					},
					axisTicks: {
						show: false,
						borderType: 'solid',
						color: 'rgba(119, 119, 142, 0.05)',
						width: 6,
						offsetX: 0,
						offsetY: 0
					},
			labels: {
				rotate: -90,
			}
		},
		yaxis: {
			show:false,
			axisBorder: {
				show: false,
			},
			axisTicks: {
				show: false,
			}
		},
			tooltip: {
			x: {
				format: 'dd/MM/yy HH:mm'
			},
			},
		};
		document.getElementById('Viewers').innerHTML = ''
		var chart2 = new ApexCharts(document.querySelector("#Viewers"), options2);
		chart2.render();
	}, 300);
}

// index1


//Sales Activity
function statistics2() {
	setTimeout(() => {
		var options = {
			series: [{
				name: "Sales",
				data: [32, 15, 63, 51, 136, 62, 99, 42, 178, 76, 32, 180]
			}],
			chart: {
				height: 280,
				type: 'line',
				zoom: {
					enabled: false
				},
				dropShadow: {
					enabled: true,
					enabledOnSeries: undefined,
					top: 5,
					left: 0,
					blur: 3,
					color: '#000',
					opacity: 0.1
				},
			},
			dataLabels: {
				enabled: false
			},
			legend: {
				position: "top",
				horizontalAlign: "left",
				offsetX: -15,
				fontWeight: "bold",
			},
			stroke: {
				curve: 'smooth',
				width: '3'
			},
			grid: {
				borderColor: '#f2f6f7',
			},
			colors: [myVarVal || "#1fc5db"],
			yaxis: {
				title: {
					text: 'Growth',
					style: {
						color: '#adb5be',
						fontSize: '14px',
						fontFamily: 'poppins, sans-serif',
						fontWeight: 600,
						cssClass: 'apexcharts-yaxis-label',
					},
				},
				labels: {
					formatter: function (y) {
						return y.toFixed(0) + "";
					}
				}
			},
			xaxis: {
				type: 'number',
				categories: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
				axisBorder: {
					show: true,
					color: 'rgba(119, 119, 142, 0.05)',
					offsetX: 0,
					offsetY: 0,
				},
				axisTicks: {
					show: true,
					borderType: 'solid',
					color: 'rgba(119, 119, 142, 0.05)',
					width: 6,
					offsetX: 0,
					offsetY: 0
				},
				labels: {
					rotate: -90
				}
			}
		};
		document.getElementById('statistics2').innerHTML = ''
		var chart = new ApexCharts(document.querySelector("#statistics2"), options);
		chart.render();
	}, 300);
}


// Budget Chart
function budget() {
	setTimeout(() => {
		var options = {
			series: [{
				name: 'This Week',
				data: [44, 42, 57, 86, 58, 55, 70],
			}, {
				name: 'Last Week',
				data: [-34, -22, -37, -56, -21, -35, -60],
			}],
			chart: {
				stacked: true,
				type: 'bar',
				height: 250,
			},
			grid: {
				borderColor: '#f2f6f7',
			},
			colors: [myVarVal || "#38cab3", "#e4e7ed"],
			plotOptions: {
				bar: {
					endingShape: 'rounded',
					colors: {
						ranges: [{
							from: -100,
							to: -46,
							color: '#ebeff5'
						}, {
							from: -45,
							to: 0,
							color: '#ebeff5'
						}]
					},
					columnWidth: '25%',
				}
			},
			dataLabels: {
				enabled: false,
			},
			legend: {
				show: true,
				position: 'top',
			},
			yaxis: {
				title: {
					style: {
						color: '#adb5be',
						fontSize: '14px',
						fontFamily: 'poppins, sans-serif',
						fontWeight: 600,
						cssClass: 'apexcharts-yaxis-label',
					},
				},
				labels: {
					formatter: function (y) {
						return y.toFixed(0) + "";
					}
				}
			},
			xaxis: {
				type: 'day',
				categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'sat'],
				axisBorder: {
					show: true,
					color: 'rgba(119, 119, 142, 0.05)',
					offsetX: 0,
					offsetY: 0,
				},
				axisTicks: {
					show: true,
					borderType: 'solid',
					color: 'rgba(119, 119, 142, 0.05)',
					width: 6,
					offsetX: 0,
					offsetY: 0
				},
				labels: {
					rotate: -90
				}
			}
		};
		document.getElementById('budget').innerHTML = ''
		var chart = new ApexCharts(document.querySelector("#budget"), options);
		chart.render();
	}, 300);
}


//Visitors chart
function viewers1() {
	setTimeout(() => {
		var options = {
			series: [{
				name: 'Male',
				data: [51, 44, 55, 42, 58, 50, 62],
			}, {
				name: 'Female',
				data: [56, 58, 38, 50, 64, 45, 55]
			}],
			chart: {
				height: 270,
				type: 'line',
				toolbar: {
					show: false,
				},
				background: 'none',
				fill: "#fff",
			},
			grid: {
				borderColor: '#f2f6f7',
			},
			colors: [myVarVal || "#1fc5db", "#e4e7ed"],
			background: 'transparent',
			dataLabels: {
				enabled: false
			},
			stroke: {
				curve: 'straight',
				width: 2
			},
			xaxis: {
				type: 'day',
				categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"]
			},
			dataLabels: {
				enabled: false,
			},
			legend: {
				show: true,
				position: 'top',
			},
			xaxis: {
				show: false,
				axisBorder: {
					show: false,
					color: 'rgba(119, 119, 142, 0.05)',
					offsetX: 0,
					offsetY: 0,
				},
				axisTicks: {
					show: false,
					borderType: 'solid',
					color: 'rgba(119, 119, 142, 0.05)',
					width: 6,
					offsetX: 0,
					offsetY: 0
				},
				labels: {
					rotate: -90,
				}
			},
			yaxis: {
				show: false,
				axisBorder: {
					show: false,
				},
				axisTicks: {
					show: false,
				}
			},
			tooltip: {
				x: {
					format: 'dd/MM/yy HH:mm'
				},
			},
		};
		document.getElementById('Viewers1').innerHTML = ''
		var chart = new ApexCharts(document.querySelector("#Viewers1"), options);
		chart.render();
	}, 300);
}


// index2
function statistics3() {
	setTimeout(()=>{
		var options = {
			series: [{
			name: 'active',
			data: [44, 42, 57, 86, 58, 55, 70, 43, 23, 54, 77, 34],
			},{
				name: 'inactive',
			data: [-34, -22, -37, -56, -21, -35, -60, -34, -56, -78, -89,-53],
		}],
			chart: {
			stacked: true,
			type: 'bar',
			height: 350,
		},
		grid: {
				borderColor: '#f2f6f7',
			},
		colors: [ myVarVal || "#38cab3","#e4e7ed"],
		plotOptions: {
			bar: {
			endingShape: 'rounded',
			colors: {
				ranges: [{
				from: -100,
				to: -46,
				color: '#ebeff5'
				}, {
				from: -45,
				to: 0,
				color: '#ebeff5'
				}]
			},
			columnWidth: '25%',
			}
		},
		dataLabels: {
			enabled: false,
		},
		legend: {
			show: true,
			position:'top',
		},
		yaxis: {
			title: {
			text: 'Growth',
				style: {
					color: '	#adb5be',
					fontSize: '14px',
					fontFamily: 'poppins, sans-serif',
					fontWeight: 600,
					cssClass: 'apexcharts-yaxis-label',
				},
			},
			labels: {
			formatter: function (y) {
				return y.toFixed(0) + "";
			}
			}
		},
		xaxis: {
			type: 'month',
			categories: ['Jan','Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'sep', 'oct', 'nov', 'dec'],
			axisBorder: {
						show: true,
						color: 'rgba(119, 119, 142, 0.05)',
						offsetX: 0,
						offsetY: 0,
					},
					axisTicks: {
						show: true,
						borderType: 'solid',
						color: 'rgba(119, 119, 142, 0.05)',
						width: 6,
						offsetX: 0,
						offsetY: 0
					},
			labels: {
			rotate: -90
			}
		}
		};
		document.getElementById('statistics3').innerHTML = ''
		var chart = new ApexCharts(document.querySelector("#statistics3"), options);
		chart.render();
	}, 300);
}

//Visitors chart
function viewers2() {
	setTimeout(()=>{
		var options = {
			series: [{
			name: 'Male',
			data: [44, 42, 57, 86, 58, 55, 70],
			color:['#766df9']
			},{
				name: 'Female',
				data: [34, 22, 47, 56, 21, 35, 60],
				color:['#ebeff5']}
			],
			chart: {
			type: 'bar',
			stacked: true,
			height: 330
		},
		grid: {
			borderColor: '#eff2f6',
		},
		colors: [ myVarVal || "#38cab3","#e4e7ed"],
		plotOptions: {
			bar: {
			horizontal: false,
			columnWidth: '30%',
			},
		},

		dataLabels: {
			enabled: false
		},
		stroke: {
			show: true,
			width: 2,
			colors: ['transparent']
		},
		states: {
			hover: {
			filter: {
				type: 'none'
			}
			}
		},yaxis: {
			title: {
				style: {
					color: '	#adb5be',
					fontSize: '14px',
					fontFamily: 'poppins, sans-serif',
					fontWeight: 600,
					cssClass: 'apexcharts-yaxis-label',
				},
			},
			labels: {
			formatter: function (y) {
				return y.toFixed(0) + "";
			}
			}
		},
		xaxis: {
			categories: ['Mon','Tue', 'Web', 'Thu', 'Fri', 'Sat', 'Sun'],
			axisBorder: {
				show: true,
				color: 'rgba(119, 119, 142, 0.05)',
				offsetX: 0,
				offsetY: 0,
			},
			axisTicks: {
				show: true,
				borderType: 'solid',
				color: 'rgba(119, 119, 142, 0.05)',
				width: 6,
				offsetX: 0,
				offsetY: 0
			},
		},
		fill: {
			opacity: 1
		},
		legend: {
			position: "top"
			},
		};
			document.getElementById('Viewers2').innerHTML = ''
		var chart = new ApexCharts(document.querySelector("#Viewers2"), options);
		chart.render();
	}, 300);
}

//names() end
