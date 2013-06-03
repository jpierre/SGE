Ext.define('vision.view.override.MantenerEvento', {

    override: 'vision.view.MantenerEvento',

    buttons:[{text:'Guardar',scope:this,itemId:'btnGuadarEvento',handler:

              function(btn){

                  Ext.getCmp('formEvento').getForm().submit({
				 				success: function(form, action) {
									console.log(action.result.sms);
									Ext.getCmp('winEvento').close(); 
									Ext.getCmp('gridEvento').getStore().load();
									Ext.getCmp('gridEvento').getView().refresh();
									},
								failure: function(form, action){
									 Ext.Msg.alert("Error!!!",action.result.sms);}
				  
				  });

              }},{text:'Cancelar',scope:this,itemId:'btnCancelarEvento',handler:function(btn){

                  Ext.getCmp('winEvento').close();

              }}]

   

    

});