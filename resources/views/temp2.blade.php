@extends('admin.layouts.app')

@section('style')


@endsection

@section('content')

<div class="sale-edit-wrapper">



<p class="text-center sale-edit-title">

  {{ $sale->title}}

</p>



<ol class='example'>
  <li>First</li>
  <li>Second</li>
  <li>Third</li>
</ol>


<div class="container">
  <div class="row">

      <div class="col-10 offset-1 col-md-12 offset-md-0">

        <div id="edit-area">

          {!!html_entity_decode($sale->body)!!}

        </div>


      </div>
  </div>


</div>



<div id="tool-area" class="container">

<div class="row">

<div class="col-10 offset-1 col-md-2 offset-md-0">

    <button type="button" class="btn btn-block btn-item-template" data-toggle="modal" data-target="#headerTemplate">
      Header
    </button>
</div>
<div class="col-10 offset-1 col-md-2 offset-md-0">

    <button type="button" class="btn btn-block btn-item-template" data-toggle="modal" data-target="#imageTemplate">
      Image
    </button>
</div>
<div class="col-10 offset-1 col-md-2 offset-md-0">

    <button type="button" class="btn btn-block btn-item-template" data-toggle="modal" data-target="#textTemplate">
      Text
    </button>
</div>

<div class="col-10 offset-1 col-md-2 offset-md-0">

    <button type="button" class="btn btn-block btn-item-template" onclick="saveSocialsTemplate()">
      Social
    </button>
</div>

<div class="col-10 offset-1 col-md-2 offset-md-0">

    <button type="button" class="btn btn-block btn-item-template" data-toggle="modal" data-target="#template1">
      Template 1
    </button>
</div>
<div class="col-10 offset-1 col-md-2 offset-md-0">

    <button type="button" class="btn btn-block btn-item-template" data-toggle="modal" data-target="#template2">
      Template 2
    </button>
</div>


</div>

</div>


<div class="container">
  <div class="row">

    <div class="col-10 offset-1 col-md-2 offset-md-8">

      <button type="button" class="btn btn-block btn-success" onclick="saveSalePage()">
        Save
      </button>

    </div>

    <div class="col-10 offset-1 col-md-2 offset-md-0">

      <button type="button" class="btn btn-block btn-danger" onclick="resetSalePage()">
        Reset
      </button>


    </div>

  </div>
</div>


</div>
@endsection

@include('admin.sales.itemtemplate.header')
@include('admin.sales.itemtemplate.headerEditor')

@include('admin.sales.itemtemplate.image')
@include('admin.sales.itemtemplate.text')
@include('admin.sales.itemtemplate.socials')
@include('admin.sales.itemtemplate.template1')
@include('admin.sales.itemtemplate.template2')


@section('script')


<script src="{{asset('addons/ckeditor/ckeditor.js')}}" ></script>



<script src="{{asset('addons/sortable/sortable.js')}}" ></script>


<script type="text/javascript">


$(function  () {
  // $("ol.example").sortable();
  //$('.div.container').sortable();
})


function getContainerID(){

    var containerCounter = $('.mycontainer').length + 1;
    var containerID = 'mycontainer_' + containerCounter;

    return containerID;
}
function getHeaderID(){

  var headerCounter = $('.sale-header-template').length + 1;
  var headerID = 'myheader_' + headerCounter;

  return headerID;
}

function createHeaderRow(){
  var text = $('#header-template-val').val();
  var headerID = getHeaderID();
  var element = '<h2 id="'+headerID+'" class="sale-header-template">' + text +'</h2>';

  var containerID = getContainerID();

  var html = '<div id="'+containerID+'" data-elementid="'+headerID+'" class="container mycontainer header-container" onclick="showHeaderEditor(this)">';

  html    += '<div class="row">';
  html    += '<div class="col-12 col-lg-10 offset-lg-1">';
  html    += '<div class="sales-col-wrapper">';
  html    += element;
  html    += '</div>';
  html    += '</div>';
  html    += '</div>';
  html    += '</div>';

  // clear text
  $('#header-template-val').val('');

  $('#edit-area').append(html);

}

//--------------- edit heder area

function showHeaderEditor(self){
      var headerID = $('#'+ self.id).data('elementid');
      var txt = $('#'+ headerID).html();
      // set value in text box
      $('#header-editor-input').val(txt);
      // set target
      $('#btn-header-edit').data('headerid', headerID);
      // call header editor
      $('#headerEditorTemplate').modal();
};

function editHeader(){
      var headerID = $('#btn-header-edit').data('headerid');
      var newTxt = $('#header-editor-input').val();
      $('#'+headerID).html(newTxt);
      $('#header-editor-input').val('');
}

</script>
@endsection
