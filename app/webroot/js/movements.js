  // $('#lnkError').click(function (e) {
  //     e.preventDefault();
  //     getFailOutput();
  // });
  //
  // // On click, get the ajax error output
  // function getFailOutput() {
  //     $.ajax({
  //         url: '/plumbing/plumbing/click',
  //         success: function (response) {
  //             $('#post').html(response.responseText);
  //         },
  //         error: function (jqXHR, exception) {
  //             console.log(jqXHR);
  //             getErrorMessage(jqXHR, exception);
  //         },
  //     });
  // }
  //
  // // This function is used to get error message for all ajax calls
  // function getErrorMessage(jqXHR, exception) {
  //     var msg = '';
  //     if (jqXHR.status === 0) {
  //         msg = 'Not connect.\n Verify Network.';
  //     } else if (jqXHR.status == 404) {
  //         msg = 'Requested page not found. [404]';
  //     } else if (jqXHR.status == 500) {
  //         msg = 'Internal Server Error [500].';
  //     } else if (exception === 'parsererror') {
  //         msg = 'Requested JSON parse failed.';
  //     } else if (exception === 'timeout') {
  //         msg = 'Time out error.';
  //     } else if (exception === 'abort') {
  //         msg = 'Ajax request aborted.';
  //     } else {
  //         msg = 'Uncaught Error.\n' + jqXHR.responseText;
  //     }
  //     $('#post').html(msg);
  // }

$(document).mousedown(function(e){

  if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    // tasks to do if it is a Mobile Device
      var isiPad = /ipad/i.test(navigator.userAgent.toLowerCase());
      var isiPhone = /iphone/i.test(navigator.userAgent.toLowerCase());
      var isiPod = /ipod/i.test(navigator.userAgent.toLowerCase());
      var isAndroid = /android/i.test(navigator.userAgent.toLowerCase());
      var isBlackBerry = /blackberry/i.test(navigator.userAgent.toLowerCase());
      var isWebOS = /webos/i.test(navigator.userAgent.toLowerCase());
      var isWindowsPhone = /windows phone/i.test(navigator.userAgent.toLowerCase());

      if (isiPad) {
        var device = "Apple Ipad";
        console.log(device);
        // alert("Mobile/Tablet Detected");
      }
      if (isiPhone) {
        var device = "Apple Iphone";
        console.log(device);
      }
      if (isiPod) {
        var device = "Apple Ipod";
        console.log(device);
      }
      if (isAndroid) {
        var device = "Android Device";
        console.log(device);
      }
      if (isBlackBerry) {
        var device = "Blackberry Device";
        console.log(device);
      }
      if (isWebOS) {
        var device = "Blackberry Device";
        console.log(device);
      }
      if (isWindowsPhone) {
        var device = "Windows Device";
        console.log(device);
      }
      } else {
        var device = "Computer";
        console.log(device);
        // alert("Computer Detected");
      }

      // if (navigator.userAgent.search("MSIE") >=0) {
      //   var browser = "Internet Explorer";
      //   console.log(browser);
      // }
      // if (navigator.userAgent.search("Chrome") >=0) {
      //   var browser = "Google Chrome";
      //   console.log(browser);
      // }
      // if (navigator.userAgent.search("Firefox") >=0) {
      //   var browser = "Mozilla Firefox";
      //   console.log(browser);
      // }
      // if (navigator.userAgent.search("Safari") >=0 && navigator.userAgent.search("Chrome") < 0) {
      //   var browser = "Safari";
      //   console.log(browser);
      // }
      // if (navigator.userAgent.search("Opera") >=0) {
      //   var browser = "Opera";
      //   console.log(browser);
      // }


  var coordX = e.pageX ;
  var coordY = e.pageY ;
  // console.log(coordX); console.log(coordY)

  var pageCoords = coordX +',' +coordY;
  // var pageCoords = "X=" + coordX +',' + 'Y='+ coordY;
  console.log(pageCoords);
  // alert("User Clicked on: "+ pageCoords + ", Using the device:" + device);

  $.ajax({
                url:"/plumbing/plumbing/click",
                type: "post",
                dataType:"json",
                data: {"pageCoords":pageCoords,"device":device},
                success: function(response) {
                  // console.log('hey, we have some data');
                  // console.log(response);
                  // console.log(response.device);
                  var cor = "Coordinates: ";
                  var dev = "Device: ";
                  var plat = "Platform: "
                  var brow = "Browser: ";
                  var ver = "Version: "
                  $('.user-click-info').html(cor.concat(response.coordinates ," ", dev , response.device, " " , plat , response.platform, " " , brow , response.browsername, " " , ver , response.version));
                  // alert(cor + response.coordinates + " " + dev + response.device + " " + plat + response.platform + " " + brow + " " + response.browsername + " " + ver + response.version);



                  $('#user-click-alert').show();

                },
                error: function() {
                  console.log('An Error Has Occured');
                }
            });

          });
      //'X='+(coordX) + '&Y='+(coordY),
      //data: {"pageCoords":pageCoords,"device":device,"browser":browser},


    // var data = {
    //   "coordinates" : data.coordinates,
    //   "device" : data.device,
    //   "platform" : data.platform,
    //   "browsername" : data.browsername,
    //   "version" : data.version,
    //
    // };


// $( window ).on("unload",(function() {
//   $.ajax({
//     data: {"pageCoords":pageCoords,"device":device,"browser":browser},//'X='+(coordX) + '&Y='+(coordY),
//     type: "post",
//     // dataType: 'varchar',
//     // async:false,
//     url:"/plumbing/plumbing/click"
//   });
//   // .error(function() {
//   //   alert("Error Saving to Database");
//   // })
//
//     // console.log(pageCoords);
//   //make ajax call to save coordinates array to database
// }));



// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
//   // tasks to do if it is a Mobile Device
//
//   var device = "Mobile";
//   console.log(device);
//   alert("Mobile Detected");
//
//   // $( window ).on("unload",(function() {
//   //   $.ajax({
//   //     data: {"device":device},//'X='+(coordX) + '&Y='+(coordY),
//   //     type: "post",
//   //     // dataType: 'varchar',
//   //     // async:false,
//   //     url:"/plumbing/plumbing/click"
//   //   })
//   //
//   //     // console.log(pageCoords);
//   //   //make ajax call to save coordinates array to database
//   // }));
//
// } else {
//   var device = "Computer";
//   console.log(device);
//   alert("Computer Detected");
// }
  // $( window ).on("unload",(function() {
  //   $.ajax({
  //     data: {"device":device},//'X='+(coordX) + '&Y='+(coordY),
  //     type: "post",
  //     // dataType: 'varchar',
  //     // async:false,
  //     url:"/plumbing/plumbing/click"
  //   })
  //
  //     // console.log(pageCoords);
  //   //make ajax call to save coordinates array to database
  // }));

  // $(document).mousedown(function(e){
  //   var pageCoords = "( " + "X:" + e.pageX + ", " + "Y:" + e.pageY + " )";
  //   console.log(pageCoords);
  //
  // });
  // var pageCoords = [];
  // $(document).onmousemove = function(){
  //   pageCoords.push("( " + e.pageX + ", " + e.pageY + " )");//get page coordinates and storing in array
  // }
  // $(window).on("unload",(function() {
  //   $.ajax({
  //     data: pageCoords,
  //     type: "POST",
  //     // async:false,
  //     url:'Index.php'
  //   })
  //   //make ajax call to save coordinates array to database
  // }));


  // var pageCoords = [];
  // $(document).mousedown = function(){
  //   pageCoords.push("( " + e.pageX + ", " + e.pageY + " )");//get page coordinates and storing in array
  // };
  //
  // var sendCoords = function() {
  //   var CoordsToSend = pageCoords.join(';');
  //   pageCoords = [];
  //   $.ajax({
  //     type: "POST",
  //     // async:false,
  //     url:'Plumbing/index',
  //     data: { pageCoords: CoordsToSend
  //     }
  //   });
  //
  // // setInterval(sendCoords, 30000);
  // $(window).on("unload"(sendCoords));
  //
  //   //make ajax call to save coordinates array to database
  // };

// $(window).on("unload",(function() {
//   $.ajax({
//     data: pageCoords,
//     type: "POST",
//     // async:false,
//     url:'../Plumbing'
//   })
//   //make ajax call to save coordinates array to database
// }));
