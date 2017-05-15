document.querySelector('button.download').onclick = function(){
  $("html, body").animate({ scrollTop: $("#download-section").offset().top }, 1000);
};

document.querySelector('.showcase.normal button').onclick = function(){
  alert("Oops... Something went wrong!");
};

document.querySelector('.showcase.sweet button').onclick = function(){
  swal("Oops...", "Something went wrong!", "error");
};

document.querySelector('ul.examples li.message button').onclick = function(){
  swal("Here's a message!");
};

document.querySelector('ul.examples li.title-text button').onclick = function(){
  swal("Here's a message!", "It's pretty, isn't it?")
};

document.querySelector('ul.examples li.timer button').onclick = function(){
  swal({
    title: "Auto close alert!",
    text: "I will close in 2 seconds.",
    timer: 2000
  });
};

document.querySelector('ul.examples li.success button').onclick = function(){
  swal("Good job!", "You clicked the button!", "success");
};

document.querySelector('ul.examples li.warning.confirm button').onclick = function(){
  swal({
    title: "Are you sure?",
    text: "You will not be able to recover this imaginary file!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: '#DD6B55',
    confirmButtonText: 'Yes, delete it!',
    closeOnConfirm: false,
    //closeOnCancel: false
  },
  function(){
    swal("Deleted!", "Your imaginary file has been deleted!", "success");
  });
};

document.querySelector('ul.examples li.warning.cancel button').onclick = function(){
  swal({
    title: "Are you sure?",
    text: "You will not be able to recover this imaginary file!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: '#DD6B55',
    confirmButtonText: 'Yes, delete it!',
    cancelButtonText: "No, cancel plx!",
    closeOnConfirm: false,
    closeOnCancel: false
  },
  function(isConfirm){
    if (isConfirm){
      swal("Deleted!", "Your imaginary file has been deleted!", "success");
    } else {
      swal("Cancelled", "Your imaginary file is safe :)", "error");
    }
  });
};

document.querySelector('ul.examples li.custom-icon button').onclick = function(){
  swal({
    title: "Sweet!",
    text: "Here's a custom image.",
    imageUrl: 'http://i.imgur.com/4NZ6uLY.jpg'
  });
};
