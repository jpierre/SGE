Ext.define('vision.view.override.MantenerEvento', {
    override: 'vision.view.MantenerEvento',
    buttons:[{text:'Guardar',scope:this,itemId:'btnGuadarEvento',handler:
              function(btn){
                  Ext.getCmp('formEvento').getForm().submit();
              }},{text:'Cancelar',scope:this,itemId:'btnCancelarEvento',handler:function(btn){
                  Ext.getCmp('winEvento').close();
              }}]
   
    
});