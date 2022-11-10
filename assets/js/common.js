
     $(document).ready(function(){
      const base_url = $('.base_url').val();
        $('#dt-product').DataTable({
          'processing': true,
          'serverSide': true,
          'serverMethod': 'post',
          'ajax': {
             'url':base_url+'product-list'
          },
          'columns': [
             { data: 'pro_id' },
             { data: 'thumbinal_image' },
             { data: 'pro_name' },
             { data: 'pro_price' },
             { data: 'view' },
             { data: 'updateData' },
             { data: 'delete' },
          ]
        });
     });
     