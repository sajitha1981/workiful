  
      $('.container1').makeExpander({
          toggleElement: 'h5',
          jqAnim: true,
          showFirst: false,
          accordion: true,
          speed: 400,
          indicator: 'triangle'
      });
      
      $('.container2').makeExpander({
          toggleElement: 'h5',
          jqAnim: true,
          showFirst: true,
          accordion: false,
          speed: 400,
          indicator: 'plusminus'
      });
      
      $('.container3').makeExpander({
          toggleElement: 'h5',
          jqAnim: true,
          showFirst: false,
          accordion: false,
          speed: 700,
          indicator: 'plusminus'
      });
   