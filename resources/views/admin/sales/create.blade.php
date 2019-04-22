@extends('admin.layouts.app')

@section('style')


@endsection

@section('content')



<h2>

  Sales Test - {{ $pageID }}

</h2>





<div id="edit-area">


</div>

<div id="tool-area" class="container">

<div class="row">

<div class="col-10 offset-1 col-md-2 offset-md-0">

    <button type="button" class="btn btn-primary btn-block btn-item-template" data-toggle="modal" data-target="#headerTemplate">
      Header
    </button>
</div>
<div class="col-10 offset-1 col-md-2 offset-md-0">

    <button type="button" class="btn btn-success btn-block btn-item-template" data-toggle="modal" data-target="#imageTemplate">
      Image
    </button>
</div>
<div class="col-10 offset-1 col-md-2 offset-md-0">

    <button type="button" class="btn btn-info btn-block btn-item-template" data-toggle="modal" data-target="#textTemplate">
      Text
    </button>
</div>

<div class="col-10 offset-1 col-md-2 offset-md-0">

    <button type="button" class="btn btn-light btn-block btn-item-template" onclick="saveSocialsTemplate()">
      Social
    </button>
</div>

<div class="col-10 offset-1 col-md-2 offset-md-0">

    <button type="button" class="btn btn-secondary btn-block btn-item-template" data-toggle="modal" data-target="#template1">
      Template 1
    </button>
</div>
<div class="col-10 offset-1 col-md-2 offset-md-0">

    <button type="button" class="btn btn-warning btn-block btn-item-template" data-toggle="modal" data-target="#template2">
      Template 2
    </button>
</div>


</div>

</div>


<div class="container">
  <div class="row">

    <div class="col-10 offset-1">

      <button type="button" class="btn btn-success" onclick="saveSalePage()">
        Save
      </button>
      <button type="button" class="btn btn-danger" onclick="resetSalePage()">
        Reset
      </button>

    </div>

  </div>
</div>



@endsection

@include('admin.sales.itemtemplate.header')
@include('admin.sales.itemtemplate.image')
@include('admin.sales.itemtemplate.text')
@include('admin.sales.itemtemplate.socials')
@include('admin.sales.itemtemplate.template1')
@include('admin.sales.itemtemplate.template2')


@section('script')


<script src="{{asset('addons/ckeditor/ckeditor.js')}}" ></script>



<script type="text/javascript">

function getContainerDetails(){

    var containerCounter = $('.mycontainer').length + 1;
    var containerID = 'mycontainer_' + containerCounter;

    return [containerID,containerCounter];
}

function createHeaderElement(txt){
    var header = '<h2 class="sale-header-template">' + txt +'</h2>';
    return header;
}

function createImageElement(src){
  var img = '<div class="sale-image-template"><img src="'+src+'" /></div>';
  return img;
}
function createParagraphElement(text){
  var paragraph = '<p>' + text +'</p>';
  //CKEDITOR.instances['text-template-val'].getData()
  return paragraph;
}
function createSocialElement(){

  var buttons =  '<div class="text-center">';
      buttons += '<a class="footer-icon" href="">';
      buttons += '<i class="fab fa-facebook-square fa-2x"></i>';
      buttons +=  '</a>';
      buttons += '<a class="footer-icon" href="">';
      buttons += '<i class="fab fa-instagram fa-2x"></i>';
      buttons +=  '</a>';
      buttons += '<a class="footer-icon" href="">';
      buttons += '<i class="fab fa-line fa-2x"></i>';
      buttons +=  '</a>';
      buttons += '<a class="footer-icon" href="">';
      buttons += '<i class="fas fa-phone-square fa-2x"></i>';
      buttons +=  '</a>';
      buttons += '</div>';

 return buttons;

}

function createSingleRow(element){

  var [containerID,containerOrder] = getContainerDetails();

  var buttonRow = createItemButtons(containerID);


  var html = '<div id="'+containerID+'" data-showorder="'+containerOrder+'" class="container mycontainer">';
  html    +=  buttonRow;
  html    += '<div class="row">';
  html    += '<div class="col-12 col-lg-10 offset-lg-1">';
  html    += '<div class="sales-col-wrapper">';
  html    += element;
  html    += '</div>';
  html    += '</div>';
  html    += '</div>';
  html    += '</div>';

  $('#edit-area').append(html);

}

function createRowTemplate1(img,paragraph){

  var [containerID,containerOrder] = getContainerDetails();

  var buttonRow = createItemButtons(containerID);

  var html = '<div id="'+containerID+'" data-showorder="'+containerOrder+'" class="container mycontainer">';
  html    +=  buttonRow;
  html    += '<div class="row">';
  html    += '<div class="col-12 col-lg-5 offset-lg-1">';
  html    += '<div class="sales-col-wrapper">';
  html    +=  img;
  html    += '</div>';
  html    += '</div>';
  html    += '<div class="col-12 col-lg-5">';
  html    += '<div class="sales-col-wrapper">';
  html    +=  paragraph;
  html    += '</div>';
  html    += '</div>';
  html    += '</div>';
  html    += '</div>';

  $('#edit-area').append(html);
}
function createRowTemplate2(img,paragraph){

  var [containerID,containerOrder] = getContainerDetails();
  var buttonRow = createItemButtons(containerID);

  var html = '<div id="'+containerID+'" data-showorder="'+containerOrder+'" class="container mycontainer">';
  html    +=  buttonRow;
  html    += '<div class="row">';
  html    += '<div class="col-12 col-lg-5 order-lg-2">';
  html    += '<div class="sales-col-wrapper">';
  html    +=  img;
  html    += '</div>';
  html    += '</div>';
  html    += '<div class="col-12 col-lg-5 offset-lg-1 order-lg-1">';
  html    += '<div class="sales-col-wrapper">';
  html    +=  paragraph;
  html    += '</div>';
  html    += '</div>';
  html    += '</div>';
  html    += '</div>';
  $('#edit-area').append(html);
}


function createItemButtons(containerID){

  html  = '<div class="row row-function">';
  html += '<div class="col-12">';
  html += '<div class="function-wrapper">';
  html += '<button type="button" class="btn btn-primary" data-containerid="'+containerID+'" onclick="moveContainerUp(this)">';
  html += '<i class="fas fa-chevron-up"></i> MOVE UP';
  html += '</button>';
  html += '<button type="button" class="btn btn-success" data-containerid="'+containerID+'" onclick="moveContainerDown(this)">';
  html += '<i class="fas fa-chevron-down"></i> MOVE DOWN';
  html += '</button>';
  html += '<button type="button" class="btn btn-danger btn-delete" data-containerid="'+containerID+'" onclick="removeContainer(this)">';
  html += '<i class="fas fa-trash"></i> DELETE';
  html += '</button>';
  html += '</div>';
  html += '</div>';
  html += '</div>';


  return html;

}

//-------------------------save element functions
function saveHeaderText(){
    var text = $('#header-templage-val').val();
    var header = createHeaderElement(text);
    createSingleRow(header);
}

function saveImage(){

  var src = $('#img-template-val').val();
  var img = createImageElement(src);
  createSingleRow(img);
}

function saveText(){

  //var text = $('#text-template-val').val();

  var paragraph = CKEDITOR.instances['text-template-val'].getData();
  createSingleRow(paragraph);
}

function saveSocialsTemplate(){
  var socialButtons = createSocialElement();
  createSingleRow(socialButtons);
}

function saveTemplate1(){
  // var text = $('#text-template1-val').val();
  var src  = $('#img-template1-val').val();
  var img = createImageElement(src);
  var paragraph = CKEDITOR.instances['text-template1-val'].getData();

  createRowTemplate1(img,paragraph);
}

function saveTemplate2(){
  var text = $('#text-template2-val').val();
  var src  = $('#img-template2-val').val();
  var img = createImageElement(src);
  var paragraph = CKEDITOR.instances['text-template2-val'].getData();
  createRowTemplate2(img,paragraph);
}


//  button function

function removeContainer(self){
    var containerID = $(self).data('containerid');
    $('#'+containerID).remove();

}

function moveContainerUp(self){
    console.log('up');
    var containerID = $(self).data('containerid');
    var prevID = $('#'+containerID).prev('.mycontainer').attr('id');
    console.log(containerID,prevID);
    $('#'+containerID).insertBefore('#'+prevID);
}
function moveContainerDown(self){
    console.log('down');
    var containerID = $(self).data('containerid');
    var nextID = $('#'+containerID).next('.mycontainer').attr('id');
    console.log(containerID,nextID);
    $('#'+nextID).insertBefore('#'+containerID);
}


function saveSalePage(){

    var html = $('#edit-area').html();
    $.post( "{{asset('api/admin/sales/store')}}", {
                        pageID: {{ $pageID }}
                      // , title: "Hello Title"
                      , body : html,
          }).done(function(response){
              console.log(response);
          });


}
function resetSalePage(){

}


</script>
@endsection
