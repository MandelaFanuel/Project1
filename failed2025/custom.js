// $(document).ready(function(){
//     $('.delete_button').click(function(e){
//         e.preventDefault();

//         var id = $(this).val();
//         alert(id);

//         swal({
//             title: "Are you sure?",
//             text: "Once deleted, you will not be able to recover this imaginary file!",
//             icon: "warning",
//             buttons: true,
//             dangerMode: true,
//           })
//           .then((willDelete) => {
//             if (willDelete) {
//              $.ajax({
//                 method: "POST",
//                 url: "students.php",
//                 data: {
//                     'functions': id,
//                     'delete_button': true
//                 },
//                 success:function(rsponse){
//                     if(response == 200){
//                         swal("Success!", "user deleted successfully !", "success");
//                     }
//                     else if(response == 500){
//                         swal("Error!", "No user found, some thing went wrong !", "error");
//                     }
//                 }
//              })
//             }
//           });
//     });
// });