$(document).ready(function(){
console.log("HI");


// EDITOR CKEDITOR
ClassicEditor
.create( document.querySelector( '#body' ) )
.catch( error => {
    console.error( error );
} );


// REST OF THE CODE


});