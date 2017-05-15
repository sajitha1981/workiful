
      $(document).on('open', '.remodal', function () {
												   
          console.log('open');
      });
      
      $(document).on('opened', '.remodal', function () {
          console.log('opened');
      });
      
      $(document).on('close', '.remodal', function () {
          console.log('close');
      });
      
      $(document).on('closed', '.remodal', function () {
          console.log('closed');
      });
      
      $(document).on('confirm', '.remodal', function () {
          alert('confirm');
      });
      
      $(document).on('cancel', '.remodal', function () {
          //alert('cancel');
		  console.log('cancel');
      });
      