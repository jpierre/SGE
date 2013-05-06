/*
 * File: app/store/tipo_pon.js
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

Ext.define('vision.store.tipo_pon', {
    extend: 'Ext.data.Store',

    constructor: function(cfg) {
        var me = this;
        cfg = cfg || {};
        me.callParent([Ext.apply({
            storeId: 'MyArrayStore4',
            data: [
                {
                    tipo_pon: '1',
                    value: 'Ponencia'
                },
                {
                    tipo_pon: '2',
                    value: 'Conferencia'
                },
                {
                    tipo_pon: '3',
                    value: 'Taller'
                }
            ],
            proxy: {
                type: 'ajax',
                reader: {
                    type: 'array'
                }
            },
            fields: [
                {
                    name: 'tipo_pon'
                },
                {
                    name: 'value'
                }
            ]
        }, cfg)]);
    }
});