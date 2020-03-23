//$(document).ready(function(){

    // $('#search').keyup(function(event) {
    //   /* Act on the event */
    //   var text=$('#search').val();
    //   $.ajax({        
    //     type: "POST", //GET or POST or PUT or DELETE verb 
    //     url: "http://localhost/my-app/public/admin/post/"+text, // Location of the service      
    //     data: text, //Data sent to server
    //     //contentType:"application/json",
    //     //dataType: "json", //Expected data format from server    
    //     //processdata: false,
    //     success: function (data) {//On Successfull service call   
    //         console.log(data);
    //         $('.danhsach').html(data);
    //     }
    //   });

    // });
    $('#search').on('keyup',function(){
        var value = $('#search').val();
        
        $.ajax({
          url: 'http://localhost/my-app/public/admin/post/search/'+value,
          type: 'get',
          data: {'text':value},
          success:function(data){

              $(".danhsach").html(data);
          }
        })
    });

        // $.ajax({
        //     type: 'get',
        //     url: 'http://localhost/my-app/public/admin/post/search/'+value,
        //     data: {
        //         'search': value
        //     },

        //     success:function(data){
        //         console.log(data);
        //         $('.danhsach').html(data);
        //     }
        // })
//     });
// });
//     