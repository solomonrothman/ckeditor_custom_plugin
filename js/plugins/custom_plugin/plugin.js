CKEDITOR.plugins.add( 'custom_plugin',{
  requires: 'dialog',
  lang : 'en,pl', // %REMOVE_LINE_CORE%
  icons: 'custom_plugin', // %REMOVE_LINE_CORE%
  init : function( editor ) {

    console.log('Init');
    console.log(this.path);

    editor.addCommand('add_custom',{
      exec: function(editor){
        console.log('adding custom');
      }
    });

    editor.ui.addButton('custom_plugin', {
      label: 'Add Custom', //this is the tooltip text for the button
      command: 'add_custom',
      icon: this.path + 'icons/icon.png'
    });

  }
})