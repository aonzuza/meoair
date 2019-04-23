@extends('admin.layouts.app')

@section('style')


@endsection

@section('content')

<div class="sale-edit-wrapper">



<p class="text-center sale-edit-title">

  {{ $sale->title}}

</p>




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

    <button type="button" class="btn btn-block btn-item-template" data-toggle="modal" data-target="#paragraphTemplate">
      Text
    </button>
</div>

<div class="col-10 offset-1 col-md-2 offset-md-0">

    <button type="button" class="btn btn-block btn-item-template" onclick="createSocialRow()">
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

    <div class="col-10 offset-1 col-md-2 offset-md-6">

      <button type="button" class="btn btn-block btn-success" onclick="saveSalePage()">
        Save
      </button>

    </div>

    <div class="col-10 offset-1 col-md-2 offset-md-0">

      <button type="button" class="btn btn-block btn-info" onclick="previewSalePage()">
        Preview
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
@include('admin.sales.itemtemplate.imageEditor')

@include('admin.sales.itemtemplate.paragraph')
@include('admin.sales.itemtemplate.paragraphEditor')

@include('admin.sales.itemtemplate.socialEditor')

@include('admin.sales.itemtemplate.template1')
@include('admin.sales.itemtemplate.templateOneEditor')

@include('admin.sales.itemtemplate.template2')
@include('admin.sales.itemtemplate.templateTwoEditor')

@section('script')


<script src="{{asset('addons/ckeditor/ckeditor.js')}}" ></script>



<script src="{{asset('addons/sortable/sortable.js')}}" ></script>


<script type="text/javascript">

// generate ID

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

function getParagraphID(){

  var paragraphCounter = $('.paragraph-wrapper').length + 1;
  var paragraphID = 'myparagraph_' + paragraphCounter;
  return paragraphID;

}
function getImageID(){
  var imageCounter = $('.myimage').length + 1;
  var imageID = 'myimage_' + imageCounter;
  return imageID;
}

// create a row for social icons

function createSocialRow(){
  var containerID = getContainerID();

  var html = '<div id="'+containerID+'" data-elementid="'+containerID+'" class="container mycontainer" onclick="showSocialRowEditor(this)">';
      html += '<div class="row">';
      html += '<div class="col-10 offset-1 social-col-wrapper">';
      html += '<div class="social-icon-wrapper sales-col-wrapper text-center">';
      html += '<a class="social-icon" href="#"><i class="fab fa-facebook-square fa-2x"></i></a>';
      html += '<a class="social-icon" href="#"><i class="fab fa-instagram fa-2x"></i></a>';
      html += '<a class="social-icon" href="#"><i class="fab fa-line fa-2x"></i></a>';
      html += '<a class="social-icon" href="#"><i class="fas fa-phone-square fa-2x"></i></a>';
      html += '</div>';
      html += '</div>';
      html += '</div>';
      html += '</div>';

  $('#edit-area').append(html);

}
function showSocialRowEditor(self){

    var containerID = self.id;
    var html = $('#' + self.id).find('.social-col-wrapper').html();

    $('#social-icon-editor').html(html);

    $('#btn-social-up').data('elementid', containerID);
    $('#btn-social-down').data('elementid', containerID);
    $('#btn-social-delete').data('elementid', containerID);

    $('#socialEditor').modal();
}

// create a row for paragraph
function createParagrah(){

  var containerID = getContainerID();
  var paragraphID = getParagraphID();

  var text =   CKEDITOR.instances['paragraph-template-input'].getData();
  var paragraphElement = text;

  var html = '<div id="'+containerID+'" data-elementid="'+containerID+'" class="container mycontainer" onclick="showParagraphEditor(this)">';

  html    += '<div class="row">';
  html    += '<div class="col-12 col-lg-10 offset-lg-1">';
  html    += '<div class="sales-col-wrapper paragraph-wrapper">';
  html    +=  paragraphElement;
  html    += '</div>';
  html    += '</div>';
  html    += '</div>';
  html    += '</div>';

  // clear text
  CKEDITOR.instances['paragraph-template-input'].setData('');

  $('#edit-area').append(html);

}

function showParagraphEditor(self){

  var containerID = self.id;
  var text = $('#'+containerID).find('.paragraph-wrapper').html();

//
//   $('#'+containerID).find('p').each(function( index ) {
//           console.log( index + ": " + $( this ).text() );
//           text += $( this ).html();
// });

  // for(var i=0; i < totalParagraph; i++){
  //     text += $('#'+containerID).find('p').eq(i).html();
  // }

  CKEDITOR.instances['edit-paragraph-input'].setData(text);

  $('#btn-paragraph-edit').data('elementid', containerID);
  $('#btn-paragraph-up').data('elementid', containerID);
  $('#btn-paragraph-down').data('elementid', containerID);
  $('#btn-paragraph-delete').data('elementid', containerID);



  $('#paragraphEditor').modal();


}
function editParagraph(self){
  var containerID = $('#'+self.id).data('elementid');
  var text = CKEDITOR.instances['edit-paragraph-input'].getData();
  console.log(containerID);
  $('#'+containerID).find('.paragraph-wrapper').html(text);

  CKEDITOR.instances['edit-paragraph-input'].setData('');
}


// create a row for an image
function createImage(){
  var containerID = getContainerID();
  var imageID = getImageID();
  var src = $('#img-template-val').val();
  var element = '<img id="'+imageID+'" src="'+src+'" />';

  var html = '<div id="'+containerID+'" data-elementid="'+imageID+'" class="container mycontainer" onclick="showImageEditor(this)">';

  html    += '<div class="row">';
  html    += '<div class="col-12 col-lg-10 offset-lg-1">';
  html    += '<div class="sales-col-wrapper">';
  html    += element;
  html    += '</div>';
  html    += '</div>';
  html    += '</div>';
  html    += '</div>';

  // clear text
  $('#img-template-val').val('');

  $('#edit-area').append(html);

}

//  create row for header

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


function createTemplate1Row(){

  var containerID = getContainerID();
  var paragraphID = getParagraphID();
  var imageID     = getImageID();

  var src  = $('#img-template1-val').val();
  var text =   CKEDITOR.instances['text-template1-val'].getData();



  var imgElement       = '<div class="sale-image-template"><img class="myimage" id="'+imageID+'" src="'+src+'" /></div>';
  // var paragraphElement = '<p class="myparagraph" id="'+paragraphID+'">' + text +'</p>';
  var paragraphElement = text;
  // console.log(paragraphElement);

  var html = '<div id="'+containerID+'" class="container mycontainer" onclick="showTemplateOneEditor(this)">';
  // html    +=  buttonRow;
  html    += '<div class="row">';
  html    += '<div class="col-12 col-lg-5 offset-lg-1">';
  html    += '<div class="sales-col-wrapper">';
  html    +=  imgElement;
  html    += '</div>';
  html    += '</div>';
  html    += '<div class="col-12 col-lg-5">';
  html    += '<div class="sales-col-wrapper paragraph-wrapper">';
  html    +=  paragraphElement;
  html    += '</div>';
  html    += '</div>';
  html    += '</div>';
  html    += '</div>';

  $('#edit-area').append(html);

  CKEDITOR.instances['text-template1-val'].setData('');
  $('#img-template1-val').val('');
}



function createTemplate2Row(){

  var containerID = getContainerID();
  var paragraphID = getParagraphID();
  var imageID     = getImageID();

  var src  = $('#img-template2-val').val();
  var text =   CKEDITOR.instances['text-template2-val'].getData();



  var imgElement       = '<div class="sale-image-template"><img class="myimage" id="'+imageID+'" src="'+src+'" /></div>';

  var paragraphElement = text;


  var html = '<div id="'+containerID+'" class="container mycontainer" onclick="showTemplateTwoEditor(this)">';

  html    += '<div class="row">';
  html    += '<div class="col-12 col-lg-5 offset-lg-1">';
  html    += '<div class="sales-col-wrapper paragraph-wrapper">';
  html    +=  paragraphElement;
  html    += '</div>';
  html    += '</div>';
  html    += '<div class="col-12 col-lg-5">';
  html    += '<div class="sales-col-wrapper ">';
  html    +=  imgElement;
  html    += '</div>';
  html    += '</div>';
  html    += '</div>';
  html    += '</div>';

  $('#edit-area').append(html);

  CKEDITOR.instances['text-template2-val'].setData('');
  $('#img-template2-val').val('');
}

// edit image area

function showImageEditor(self){

    var imageID = $('#'+ self.id).data('elementid');
    var src = $('#'+ imageID).attr('src');
    $('#edit-image-input').val(src);

    $('#btn-image-edit').data('elementid', imageID);
    $('#btn-image-up').data('elementid', imageID);
    $('#btn-image-down').data('elementid', imageID);
    $('#btn-image-delete').data('elementid', imageID);

    $('#imageEditor').modal();
}
function editeImage(){
  var imageID = $('#btn-image-edit').data('elementid');
  var src     = $('#edit-image-input').val();

  $('#' + imageID).attr('src',src);
  $('#edit-image-input').val('');
}

//--------------- edit heder area

function showHeaderEditor(self){
      var headerID = $('#'+ self.id).data('elementid');
      var txt = $('#'+ headerID).html();
      // set value in text box
      $('#header-editor-input').val(txt);
      // set target
      $('#btn-header-edit').data('elementid', headerID);
      $('#btn-header-up').data('elementid', headerID);
      $('#btn-header-down').data('elementid', headerID);
      $('#btn-header-delete').data('elementid', headerID);
      // call header editor
      $('#headerEditorTemplate').modal();
};

function editHeader(){
      var headerID = $('#btn-header-edit').data('elementid');
      var newTxt = $('#header-editor-input').val();
      $('#'+headerID).html(newTxt);
      $('#header-editor-input').val('');
}

//  edit template one area
function showTemplateOneEditor(self){
      // console.log(self.id);
      // get text
      var containerID = self.id;

      // console.log('here ' + containerID);
      //var txt = $('#'+ self.id).find('p').html();
      var txt = $('#'+containerID).find('.paragraph-wrapper').html();

      // get image src
      var src = $('#'+ self.id).find('img').attr('src');

      var imageID = $('#'+ self.id).find('img').attr('id');

      $('#edit-template1-image').val(src);
      CKEDITOR.instances['edit-itemplate1-text'].setData(txt);
      // // set target
      //btn-templateone-up
      $('#btn-templateone-up').data('elementid', imageID);
      $('#btn-templateone-down').data('elementid', imageID);
      $('#btn-templateone-edit').data('elementid', containerID);
      $('#btn-templateone-delete').data('elementid', imageID);
      // call editor
      $('#templateOneEditor').modal();
};
function editeTemplateOne(self){

    var containerID = $('#'+self.id).data('elementid');
  // set text
    var text =   CKEDITOR.instances['edit-itemplate1-text'].getData();
    $('#'+containerID).find('.paragraph-wrapper').html(text);
  // set image
    var src   =   $('#edit-template1-image').val();
    $('#'+containerID).find('.myimage').attr('src',src);
    // clear inputs

    CKEDITOR.instances['edit-itemplate1-text'].setData('');

}


// edit template two
function showTemplateTwoEditor(self){
      // console.log(self.id);
      // get text
      var containerID = self.id;


      //var txt = $('#'+ self.id).find('p').html();
      var txt = $('#'+containerID).find('.paragraph-wrapper').html();


      // get image src
      var src = $('#'+ self.id).find('img').attr('src');

      var imageID = $('#'+ self.id).find('img').attr('id');

      $('#edit-template2-image').val(src);
      CKEDITOR.instances['edit-itemplate2-text'].setData(txt);
      // // set target
      //btn-templateone-up
      $('#btn-templatetwo-up').data('elementid', imageID);
      $('#btn-templatetwo-down').data('elementid', imageID);
      $('#btn-templatetwo-edit').data('elementid', containerID);
      $('#btn-templatetwo-delete').data('elementid', imageID);
      // call editor
      $('#templateTwoEditor').modal();
};


function editeTemplateTwo(self){

    var containerID = $('#'+self.id).data('elementid');
    console.log(containerID);
  // set text
    var text =   CKEDITOR.instances['edit-itemplate2-text'].getData();
    $('#'+containerID).find('.paragraph-wrapper').html(text);
  // set image
    var src   =   $('#edit-template2-image').val();
    $('#'+containerID).find('.myimage').attr('src',src);
    // clear inputs

    CKEDITOR.instances['edit-itemplate2-text'].setData('');

}



//  move up and  down ///
function moveUp(self){

   var elementid        = $('#'+self.id).data('elementid');
   var containerID     = $('#'+elementid).closest('.mycontainer').attr('id');
   var upperContainerID = $('#'+containerID).prev('.mycontainer').attr('id');

   $('#'+containerID).insertBefore('#'+upperContainerID);
}

function moveDown(self){

   var elementid        = $('#'+self.id).data('elementid');
   var containerID     = $('#'+elementid).closest('.mycontainer').attr('id');
   var lowerContainerID = $('#'+containerID).next('.mycontainer').attr('id');

   $('#'+lowerContainerID).insertBefore('#'+containerID);
}


// delete element

function deleteContainer(self){

  var elementid   = $('#'+self.id).data('elementid');
  var containerID = $('#'+elementid).closest('.mycontainer').attr('id');

  if(confirm('Are you sure you want to delete ?')){
        $('#'+containerID).remove();
  }


}


function previewSalePage(){

  var html = $('#edit-area').html();
  var pageID = {{$sale->pageID }};
  $.post( "{{asset('api/admin/sales/store/temp')}}", {
                      pageID: pageID
                    , body : html,
        }).done(function(response){

          var link = '{{asset('sales/show/temp')}}' + '/' + pageID;
          window.open(link, '_blank');

        });


}

function saveSalePage(){

    var html = $('#edit-area').html();
    $.post( "{{asset('api/admin/sales/store')}}", {
                        pageID: {{$sale->pageID }}

                      , body : html,
          }).done(function(response){

            window.location = '{{asset('admin/sales')}}';

          });

}
function resetSalePage(){
    window.location.reload(true);
}

</script>
@endsection
