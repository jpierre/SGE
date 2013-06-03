Ext.define('vision.view.override.MantenerPonencia', {
    override: 'vision.view.MantenerPonencia',
    buttons:[{text:'Guardar',itemId:'btnGuadarUser',scope:this,handler:
              function(btn){
                  Ext.getCmp('formPon').getForm().submit();
              }},{text:'Cancelar',scope:this,itemId:'btnCancelarPon',handler:function(btn){
                  Ext.getCmp('winPonencia').close();
              }}]
    
});