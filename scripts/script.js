

$(document).scroll(function(){
    var y= $(this).scrollTop();
    if(y>50){
        $('.floating-menu').addClass('floating-menu-scrolled');    
    }else{
        $('.floating-menu').removeClass('floating-menu-scrolled');   
    }
});

// $(document).ready(function(){
//     var menu_flag=0;
//     $('.menu_icon').click(function(){
//         if(!menu_flag){
//             $('.menu_icon').addClass('menu_clicked').addClass('fa-xmark').removeClass('fa-bars');
//             $('.sidebar').show();
//             menu_flag=1;
//         }else{
//             $('.menu_icon').addClass('fa-bars').removeClass('fa-xmark');
//             $('.sidebar').hide();
//             menu_flag=0;
//         }
        
//     });
// });
