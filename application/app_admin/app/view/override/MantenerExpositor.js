Ext.define('vision.view.override.MantenerExpositor', {

    override: 'vision.view.MantenerExpositor',

    buttons:[{text:'Guardar',scope:this,itemId:'btnGuadarExpositor',handler:

              function(btn){

                  Ext.getCmp('formExpositor').getForm().submit({
				 				success: function(form, action) {
									console.log(action.result.sms);
									Ext.getCmp('winExpositor').close();
									Ext.getCmp('gridExpositor').getStore().load();
									Ext.getCmp('gridExpositor').getView().refresh();
									},
								failure: function(form, action){
									 Ext.Msg.alert("Error!!!",action.result.sms);}
				  
				  });

              }},{text:'Cancelar',scope:this,itemId:'btnCancelarExpositor',handler:function(btn){

                  Ext.getCmp('winExpositor').close();

              }}]

    

});