/*
 * File: app/view/GridEvento.js
 *
 * This file was generated by Sencha Architect version 2.1.0.
 * http://www.sencha.com/products/architect/
 *
 * This file requires use of the Ext JS 4.1.x library, under independent license.
 * License of Sencha Architect does not include license for Ext JS 4.1.x. For more
 * details see http://www.sencha.com/license or contact license@sencha.com.
 *
 * This file will be auto-generated each and everytime you save your project.
 *
 * Do NOT hand edit this file.
 */

Ext.define('vision.view.GridEvento', {
    extend: 'Ext.grid.Panel',

    height: 300,
    id: 'gridEvento',
    itemId: 'gridEvento',
    title: 'Mantener Evento',
    columnLines: false,
    store: 'Evento',

    initComponent: function() {
        var me = this;

        Ext.applyIf(me, {
            columns: [
                {
                    xtype: 'rownumberer'
                },
                {
                    xtype: 'numbercolumn',
                    hidden: false,
                    width: 120,
                    defaultWidth: 120,
                    align: 'center',
                    dataIndex: 'id_eve',
                    text: 'Código de Evento',
                    format: '00'
                },
                {
                    xtype: 'gridcolumn',
                    width: 220,
                    defaultWidth: 200,
                    dataIndex: 'nom_eve',
                    text: 'Nombre del Evento'
                },
                {
                    xtype: 'datecolumn',
                    defaultWidth: 150,
                    dataIndex: 'fech_ini_eve',
                    text: 'Fecha Inicio',
                    format: 'd/m/Y'
                },
                {
                    xtype: 'datecolumn',
                    defaultWidth: 150,
                    dataIndex: 'fech_fin_eve',
                    text: 'Fecha Fin',
                    format: 'd/m/Y '
                },
                {
                    xtype: 'gridcolumn',
                    defaultWidth: 220,
                    dataIndex: 'est_eve_desc',
                    text: 'Estado'
                }
            ],
            viewConfig: {

            },
            dockedItems: [
                {
                    xtype: 'pagingtoolbar',
                    dock: 'bottom',
                    id: 'paginador_evento',
                    width: 360,
                    afterPageText: 'de {0}',
                    beforePageText: 'Pagina',
                    displayInfo: true,
                    displayMsg: 'Eventos {0} - {1} de {2}',
                    emptyMsg: 'No Existen Ponencias',
                    firstText: 'Primera Pagina',
                    lastText: 'Ultima Pagina',
                    prevText: 'Pagina Anterior',
                    refreshText: 'Actualizar',
                    store: 'Evento'
                },
                {
                    xtype: 'toolbar',
                    dock: 'top',
                    items: [
                        {
                            xtype: 'button',
                            handler: function(button, event) {
                                var winp=Ext.getCmp('winEvnto');

                                if(!winp){
                                    Ext.create('vision.view.MantenerEvento');
                                winp=Ext.getCmp('winEvento');}

                                //Ext.getCmp('cod_exp_pon').setDisabled(false);
                                Ext.getCmp('formEvento').getForm().reset(); 
                                winp.show();
                            },
                            id: 'btn_CEvento',
                            iconCls: 'icon-add',
                            text: 'Crear Evento'
                        },
                        {
                            xtype: 'tbseparator'
                        },
                        {
                            xtype: 'button',
                            handler: function(button, event) {


                                var winp=Ext.getCmp('winEvento');

                                if(!winp){
                                    Ext.create('vision.view.MantenerEvento');
                                winp=Ext.getCmp('winEvento');}
                                var id_eve=sessionStorage.getItem('id_eve');
                                if(id_eve!='-1'){
                                    //Ext.getCmp('cod_exp_pon').setDisabled(true);
                                    var record=Ext.getCmp('gridEvento').getStore().findRecord('id_eve',id_eve);
                                    Ext.getCmp('id_eve').setValue(record.get('id_eve'));
                                    Ext.getCmp('nom_eve').setValue(record.get('nom_eve'));
                                    Ext.getCmp('fech_ini_eve').setValue(Ext.Date.format(new Date(record.get('fech_ini_eve')), 'd-m-Y H:i:s'));
                                    Ext.getCmp('fech_fin_eve').setValue(Ext.Date.format(new Date(record.get('fech_ini_eve')), 'd-m-Y H:i:s'));
                                    Ext.getCmp('est_eve').setValue(record.get('est_eve'));

                                    winp.show();



                                }else Ext.Msg.alert('Precaución','Debe seleccionar un Evento.');



                            },
                            id: 'btnManEvento',
                            iconCls: 'icon-edit',
                            text: 'Modificar Evento'
                        },
                        {
                            xtype: 'tbseparator'
                        },
                        {
                            xtype: 'button',
                            handler: function(button, event) {

                                var id_eve=sessionStorage.getItem('id_eve');
                                if(id_eve!=-1){
                                    var sevento=Ext.getCmp('gridEvento').getStore();
                                    var record=Ext.getCmp('gridEvento').getStore().findRecord('id_eve',id_eve);
                                    var opt=Ext.MessageBox.confirm('Comfirmar', 'Esta se guro que desea eliminar el:<br>Evento: <b>'+record.get('nom_eve')+'</b><br>Codigo: <b>'+id_eve+'<b>',
                                    function(button) {
                                        if (button === 'yes') {
                                            sevento.load({
                                                url:'../../administracion/evento/borrar_evento',
                                                method: 'POST',
                                                params:{'tipoSql':'delete','id_eve':id_eve},
                                                scope: this,
                                                callback: function(records, operation, success,response) {
                                                    // the operation object
                                                    // contains all of the details of the load operation
                                                    //this.load();

                                                }

                                            });
                                        }//END if

                                    });
                                }else Ext.Msg.alert('Precaución','Debe seleccionar una Evento.');

                            },
                            id: 'btn_BEvento',
                            text: 'Eliminar evento'
                        }
                    ]
                }
            ],
            listeners: {
                select: {
                    fn: me.onGridponenciaSelect,
                    scope: me
                }
            }
        });

        me.callParent(arguments);
    },

    onGridponenciaSelect: function(selModel, record, index, options) {
        sessionStorage.setItem('id_eve',record.get('id_eve'));
    }

});