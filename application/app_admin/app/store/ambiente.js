/*
 * File: app/store/ambiente.js
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

Ext.define('vision.store.ambiente', {
    extend: 'Ext.data.Store',

    requires: [
        'vision.model.Ambiente'
    ],

    constructor: function(cfg) {
        var me = this;
        cfg = cfg || {};
        me.callParent([Ext.apply({
            storeId: 'MyArrayStore1',
            model: 'vision.model.Ambiente',
            data: [
                {
                    id_amb: '1',
                    value: 'Aula'
                },
                {
                    id_amb: '2',
                    value: 'Laboratorio'
                },
                {
                    id_amb: '3',
                    value: 'Coliseo'
                }
            ],
            proxy: {
                type: 'ajax',
                reader: {
                    type: 'array'
                }
            }
        }, cfg)]);
    }
});