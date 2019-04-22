@extends('admin.layouts.app')


@section('content')



<div class="sales-index-wrapper">


<div class="container">
  <div class="row">
      <div class="col-12">

        <div class="text-right py-4">

                <button class="btn  btn-outline-warning" data-toggle="modal" data-target="#create-page-template">
                  + New Page
                </button>

        </div>

      </div>
  </div>
  <div class="row">
    <div class="col-12">


    <table class="sales-page-table">
      <th>No.</th>
      <th>Title</th>
      <th>Create Date</th>
      <th>Last Update</th>
      <th>Options</th>

      @foreach( $sales as $sale)
      <tr>
          <td>
                {{ (($sales->currentPage() - 1 ) * $sales->perPage() ) + $loop->iteration }}
          </td>
          <td> {{$sale->title }}</td>
          <td> {{$sale->created_at}}</td>
          <td> {{$sale->updated_at}}</td>
          <td>

              <button class="btn btn-sm btn-outline-success btn-getlink" data-title="{{$sale->title}}" data-pageid="{{$sale->pageID}}">
                Link
              </button>
              <a class="sale-page-button-link" href="{{asset('admin/sales/'.$sale->pageID.'/edit')}}" >
                <button class="btn btn-sm btn-outline-primary">
                  Edit
                </button>
              </a>
              <a sale-page-button-link href="{{asset('admin/sales/'.$sale->pageID.'/delete')}}" onclick="return confirm('Are you sure you want to delete {{$sale->title}}?')">
                   <button class="btn btn-sm btn-outline-danger">
                     Delete
                   </button>
              </a>
          </td>
      </tr>
      @endforeach
    </table>


    <div class="d-flex my-4">
         <div class="mx-auto">
             {{$sales->links("pagination::bootstrap-4")}}
         </div>
     </div>

    </div>
  </div>
</div>


</div>



@endsection


@include('admin.sales.itemtemplate.createpage')
@include('admin.sales.itemtemplate.getlink')

@section('script')

<script type="text/javascript">

function copyText(){

 var text =  $('#txt-sale-link').select();
 document.execCommand("copy");
}


function createPage(){

  var title = $('#txt-page-name').val();


  $.post( "{{asset('api/admin/sales/create')}}", {
                      title: title
        }).done(function(response){
              document.location.reload(true);
        });

}

$('.btn-getlink').click(function(){

      var pageID = $(this).data('pageid');
      var title = $(this).data('title');
      //getlink-template
      //txt-sale-link
      $("#getlink-template").modal();

      var link = '{{asset('sales/show')}}' + '/' + pageID;
      $('#txt-sale-link').val(link);

      $('#getlink-header-template').html(title);
});




</script>


@endsection
