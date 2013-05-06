Ext.define('vision.view.override.MantenerExpositor', {
    override: 'vision.view.MantenerExpositor',
    buttons:[{text:'Guardar',scope:this,itemId:'btnGuadarExpositor',handler:
              function(btn){
                  Ext.getCmp('formExpositor').getForm().submit();
              }},{text:'Cancelar',scope:this,itemId:'btnCancelarExpositor',handler:function(btn){
                  Ext.getCmp('winExpositor').close();
              }}]
    
});