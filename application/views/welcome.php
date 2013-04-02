<script type="text/javascript">
	Ext.Loader.setConfig({enabled: true});
	Ext.Loader.setPath('Ext.ux', '/assets/ext/ux/');
	
	Ext.require(['*','Ext.ux.statusbar.StatusBar', 'Ext.ux.RowExpander', 'Ext.ux.CheckColumn']);
	var win;
	function showLoginForm() {
		if (!win) {
			var form = Ext.widget('form', {
					layout: {
						type: 'vbox',
						align: 'stretch'
					},
					border: false,
					bodyPadding: 10,
					fieldDefaults: {
						labelAlign: 'top',
						labelWidth: 100,
						labelStyle: 'font-weight:bold'
					},
					defaults: {
						margins: '0 0 10 0'
					},
					items: [{
						xtype: 'textfield',
						fieldLabel: 'Username',
						allowBlank: false
					}, {
						xtype: 'textfield',
						fieldLabel: 'Password',
						inputType: 'password',
						allowBlank: false
					}],
					buttons: [{
						text: 'Cancel',
						handler: function() {
							this.up('form').getForm().reset();
							this.up('window').hide();
						}
					}, {
						text: 'Login',
						handler: function() {
							if (this.up('form').getForm().isValid()) {
								// In a real application, this would submit the form to the configured url
								// this.up('form').getForm().submit();
								this.up('form').getForm().reset();
								this.up('window').hide();
								Ext.MessageBox.alert('Thank you!', 'Your inquiry has been sent. We will respond as soon as possible.');
							}
						}
					}]
				});
			win = Ext.widget('window', {
				title: 'Login',
				closeAction: 'hide',
				width: 300,
				height: 200,
				minHeight: 100,
				layout: 'fit',
				resizable: false,
				modal: true,
				items: form
			});
		}
		win.show();
	}
		/**
		 * Custom function used for column renderer
		 * @param {Object} val
		 */
		function change(val) {
				if (val > 0) {
						return '<span style="color:green;">' + val + '</span>';
				} else if (val < 0) {
						return '<span style="color:red;">' + val + '</span>';
				}
				return val;
		}
		/**
		 * Custom function used for column renderer
		 * @param {Object} val
		 */
		function pctChange(val) {
				if (val > 0) {
						return '<span style="color:green;">' + val + '%</span>';
				} else if (val < 0) {
						return '<span style="color:red;">' + val + '%</span>';
				}
				return val;
		}
		 // some data used in the examples
		 Ext.namespace('Ext.example');
		 Ext.example.states = [
						 ['AL', 'Alabama', 'The Heart of Dixie'],
						 ['AK', 'Alaska', 'The Land of the Midnight Sun'],
						 ['AZ', 'Arizona', 'The Grand Canyon State'],
						 ['AR', 'Arkansas', 'The Natural State'],
						 ['CA', 'California', 'The Golden State'],
						 ['CO', 'Colorado', 'The Mountain State'],
						 ['CT', 'Connecticut', 'The Constitution State'],
						 ['DE', 'Delaware', 'The First State'],
						 ['DC', 'District of Columbia', "The Nation's Capital"],
						 ['FL', 'Florida', 'The Sunshine State'],
						 ['GA', 'Georgia', 'The Peach State'],
						 ['HI', 'Hawaii', 'The Aloha State'],
						 ['ID', 'Idaho', 'Famous Potatoes'],
						 ['IL', 'Illinois', 'The Prairie State'],
						 ['IN', 'Indiana', 'The Hospitality State'],
						 ['IA', 'Iowa', 'The Corn State'],
						 ['KS', 'Kansas', 'The Sunflower State'],
						 ['KY', 'Kentucky', 'The Bluegrass State'],
						 ['LA', 'Louisiana', 'The Bayou State'],
						 ['ME', 'Maine', 'The Pine Tree State'],
						 ['MD', 'Maryland', 'Chesapeake State'],
						 ['MA', 'Massachusetts', 'The Spirit of America'],
						 ['MI', 'Michigan', 'Great Lakes State'],
						 ['MN', 'Minnesota', 'North Star State'],
						 ['MS', 'Mississippi', 'Magnolia State'],
						 ['MO', 'Missouri', 'Show Me State'],
						 ['MT', 'Montana', 'Big Sky Country'],
						 ['NE', 'Nebraska', 'Beef State'],
						 ['NV', 'Nevada', 'Silver State'],
						 ['NH', 'New Hampshire', 'Granite State'],
						 ['NJ', 'New Jersey', 'Garden State'],
						 ['NM', 'New Mexico', 'Land of Enchantment'],
						 ['NY', 'New York', 'Empire State'],
						 ['NC', 'North Carolina', 'First in Freedom'],
						 ['ND', 'North Dakota', 'Peace Garden State'],
						 ['OH', 'Ohio', 'The Heart of it All'],
						 ['OK', 'Oklahoma', 'Oklahoma is OK'],
						 ['OR', 'Oregon', 'Pacific Wonderland'],
						 ['PA', 'Pennsylvania', 'Keystone State'],
						 ['RI', 'Rhode Island', 'Ocean State'],
						 ['SC', 'South Carolina', 'Nothing Could be Finer'],
						 ['SD', 'South Dakota', 'Great Faces, Great Places'],
						 ['TN', 'Tennessee', 'Volunteer State'],
						 ['TX', 'Texas', 'Lone Star State'],
						 ['UT', 'Utah', 'Salt Lake State'],
						 ['VT', 'Vermont', 'Green Mountain State'],
						 ['VA', 'Virginia', 'Mother of States'],
						 ['WA', 'Washington', 'Green Tree State'],
						 ['WV', 'West Virginia', 'Mountain State'],
						 ['WI', 'Wisconsin', "America's Dairyland"],
						 ['WY', 'Wyoming', 'Like No Place on Earth']
				 ];
	
	Ext.onReady(function() {
		
		Ext.QuickTips.init();
			var myData = [
										['3m Co',                               71.72, 0.02,  0.03,  '9/1 12:00am'],
										['Alcoa Inc',                           29.01, 0.42,  1.47,  '9/1 12:00am'],
										['Altria Group Inc',                    83.81, 0.28,  0.34,  '9/1 12:00am'],
										['American Express Company',            52.55, 0.01,  0.02,  '9/1 12:00am'],
										['American International Group, Inc.',  64.13, 0.31,  0.49,  '9/1 12:00am'],
										['AT&T Inc.',                           31.61, -0.48, -1.54, '9/1 12:00am'],
										['Boeing Co.',                          75.43, 0.53,  0.71,  '9/1 12:00am'],
										['Caterpillar Inc.',                    67.27, 0.92,  1.39,  '9/1 12:00am'],
										['Citigroup, Inc.',                     49.37, 0.02,  0.04,  '9/1 12:00am'],
										['E.I. du Pont de Nemours and Company', 40.48, 0.51,  1.28,  '9/1 12:00am'],
										['Exxon Mobil Corp',                    68.1,  -0.43, -0.64, '9/1 12:00am'],
										['General Electric Company',            34.14, -0.08, -0.23, '9/1 12:00am'],
										['General Motors Corporation',          30.27, 1.09,  3.74,  '9/1 12:00am'],
										['Hewlett-Packard Co.',                 36.53, -0.03, -0.08, '9/1 12:00am'],
										['Honeywell Intl Inc',                  38.77, 0.05,  0.13,  '9/1 12:00am'],
										['Intel Corporation',                   19.88, 0.31,  1.58,  '9/1 12:00am'],
										['International Business Machines',     81.41, 0.44,  0.54,  '9/1 12:00am'],
										['Johnson & Johnson',                   64.72, 0.06,  0.09,  '9/1 12:00am'],
										['JP Morgan & Chase & Co',              45.73, 0.07,  0.15,  '9/1 12:00am'],
										['McDonald\'s Corporation',             36.76, 0.86,  2.40,  '9/1 12:00am'],
										['Merck & Co., Inc.',                   40.96, 0.41,  1.01,  '9/1 12:00am'],
										['Microsoft Corporation',               25.84, 0.14,  0.54,  '9/1 12:00am'],
										['Pfizer Inc',                          27.96, 0.4,   1.45,  '9/1 12:00am'],
										['The Coca-Cola Company',               45.07, 0.26,  0.58,  '9/1 12:00am'],
										['The Home Depot, Inc.',                34.64, 0.35,  1.02,  '9/1 12:00am'],
										['The Procter & Gamble Company',        61.91, 0.01,  0.02,  '9/1 12:00am'],
										['United Technologies Corporation',     63.26, 0.55,  0.88,  '9/1 12:00am'],
										['Verizon Communications',              35.57, 0.39,  1.11,  '9/1 12:00am'],
										['Wal-Mart Stores, Inc.',               45.45, 0.73,  1.63,  '9/1 12:00am']
								];
			// create the data store
			var store = Ext.create('Ext.data.ArrayStore', {
					fields: [
						 {name: 'company'},
						 {name: 'price',      type: 'float'},
						 {name: 'change',     type: 'float'},
						 {name: 'pctChange',  type: 'float'},
						 {name: 'lastChange', type: 'date', dateFormat: 'n/j h:ia'}
					],
					data: myData
			});
			// create the Grid
			var grid = Ext.create('Ext.grid.Panel', {
					store: store,
					//stateful: true,
					stateId: 'stateGrid',
					columns: [
							{
									text     : 'Company',
									flex     : 1,
									sortable : false,
									dataIndex: 'company'
							},
							{
									text     : 'Price',
									width    : 75,
									sortable : true,
									renderer : 'usMoney',
									dataIndex: 'price'
							},
							{
									text     : 'Change',
									width    : 75,
									sortable : true,
									renderer : change,
									dataIndex: 'change'
							},
							{
									text     : '% Change',
									width    : 75,
									sortable : true,
									renderer : pctChange,
									dataIndex: 'pctChange'
							},
							{
									text     : 'Last Updated',
									width    : 85,
									sortable : true,
									renderer : Ext.util.Format.dateRenderer('m/d/Y'),
									dataIndex: 'lastChange'
							},
							{
									xtype: 'actioncolumn',
									width: 50,
									items: [{
											icon   : '/assets/images/icons/fam/delete.gif',  // Use a URL in the icon config
											tooltip: 'Sell stock',
											handler: function(grid, rowIndex, colIndex) {
													var rec = store.getAt(rowIndex);
													alert("Sell " + rec.get('company'));
											}
									}, {
											getClass: function(v, meta, rec) {          // Or return a class from a function
													if (rec.get('change') < 0) {
															this.items[1].tooltip = 'Hold stock';
															return 'alert-col';
													} else {
															this.items[1].tooltip = 'Buy stock';
															return 'buy-col';
													}
											},
											handler: function(grid, rowIndex, colIndex) {
													var rec = store.getAt(rowIndex);
													alert((rec.get('change') < 0 ? "Hold " : "Buy ") + rec.get('company'));
											}
									}]
							}
					],
					//height: 350,
					//width: 600,
					layout:'fit',
					autoScroll:true,
					title: 'Array Grid',
					//renderTo: 'grid-example',
					viewConfig: {
							stripeRows: true
					}
			});
			Ext.define('Company', {
					extend: 'Ext.data.Model',
					fields: [
							{name: 'company'},
							{name: 'price', type: 'float'},
							{name: 'change', type: 'float'},
							{name: 'pctChange', type: 'float'},
							{name: 'lastChange', type: 'date', dateFormat: 'n/j h:ia'},
							{name: 'industry'},
							{name: 'desc'}
					 ]
			});
			// Array data for the grids
			Ext.grid.dummyData = [
					['3m Co',71.72,0.02,0.03,'9/1 12:00am', 'Manufacturing'],
					['Alcoa Inc',29.01,0.42,1.47,'9/1 12:00am', 'Manufacturing'],
					['Altria Group Inc',83.81,0.28,0.34,'9/1 12:00am', 'Manufacturing'],
					['American Express Company',52.55,0.01,0.02,'9/1 12:00am', 'Finance'],
					['American International Group, Inc.',64.13,0.31,0.49,'9/1 12:00am', 'Services'],
					['AT&T Inc.',31.61,-0.48,-1.54,'9/1 12:00am', 'Services'],
					['Boeing Co.',75.43,0.53,0.71,'9/1 12:00am', 'Manufacturing'],
					['Caterpillar Inc.',67.27,0.92,1.39,'9/1 12:00am', 'Services'],
					['Citigroup, Inc.',49.37,0.02,0.04,'9/1 12:00am', 'Finance'],
					['E.I. du Pont de Nemours and Company',40.48,0.51,1.28,'9/1 12:00am', 'Manufacturing'],
					['Exxon Mobil Corp',68.1,-0.43,-0.64,'9/1 12:00am', 'Manufacturing'],
					['General Electric Company',34.14,-0.08,-0.23,'9/1 12:00am', 'Manufacturing'],
					['General Motors Corporation',30.27,1.09,3.74,'9/1 12:00am', 'Automotive'],
					['Hewlett-Packard Co.',36.53,-0.03,-0.08,'9/1 12:00am', 'Computer'],
					['Honeywell Intl Inc',38.77,0.05,0.13,'9/1 12:00am', 'Manufacturing'],
					['Intel Corporation',19.88,0.31,1.58,'9/1 12:00am', 'Computer'],
					['International Business Machines',81.41,0.44,0.54,'9/1 12:00am', 'Computer'],
					['Johnson & Johnson',64.72,0.06,0.09,'9/1 12:00am', 'Medical'],
					['JP Morgan & Chase & Co',45.73,0.07,0.15,'9/1 12:00am', 'Finance'],
					['McDonald\'s Corporation',36.76,0.86,2.40,'9/1 12:00am', 'Food'],
					['Merck & Co., Inc.',40.96,0.41,1.01,'9/1 12:00am', 'Medical'],
					['Microsoft Corporation',25.84,0.14,0.54,'9/1 12:00am', 'Computer'],
					['Pfizer Inc',27.96,0.4,1.45,'9/1 12:00am', 'Services', 'Medical'],
					['The Coca-Cola Company',45.07,0.26,0.58,'9/1 12:00am', 'Food'],
					['The Home Depot, Inc.',34.64,0.35,1.02,'9/1 12:00am', 'Retail'],
					['The Procter & Gamble Company',61.91,0.01,0.02,'9/1 12:00am', 'Manufacturing'],
					['United Technologies Corporation',63.26,0.55,0.88,'9/1 12:00am', 'Computer'],
					['Verizon Communications',35.57,0.39,1.11,'9/1 12:00am', 'Services'],
					['Wal-Mart Stores, Inc.',45.45,0.73,1.63,'9/1 12:00am', 'Retail'],
					['Walt Disney Company (The) (Holding Company)',29.89,0.24,0.81,'9/1 12:00am', 'Services']
			];
			// add in some dummy descriptions
			for(var i = 0; i < Ext.grid.dummyData.length; i++){
					Ext.grid.dummyData[i].push('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed metus nibh, sodales a, porta at, vulputate eget, dui. Pellentesque ut nisl. ');
			}
			var getLocalStore = function() {
					return Ext.create('Ext.data.ArrayStore', {
							model: 'Company',
							data: Ext.grid.dummyData
					});
			};
				////////////////////////////////////////////////////////////////////////////////////////
			// Grid 1
			////////////////////////////////////////////////////////////////////////////////////////
			// row expander
			var grid1 = Ext.create('Ext.grid.Panel', {
					store: getLocalStore(),
					columns: [
							{text: "Company", flex: 1, dataIndex: 'company'},
							{text: "Price", renderer: Ext.util.Format.usMoney, dataIndex: 'price'},
							{text: "Change", renderer : change, dataIndex: 'change'},
							{text: "% Change", renderer : pctChange, dataIndex: 'pctChange'},
							{text: "Last Updated", renderer: Ext.util.Format.dateRenderer('m/d/Y'), dataIndex: 'lastChange'}
					],
					//width: 600,
					//height: 300,
					layout:'fit',
					autoScroll:true,
					plugins: [{
							ptype: 'rowexpander',
							rowBodyTpl : [
									'<p><b>Company:</b> {company}</p><br>',
									'<p><b>Summary:</b> {desc}</p>'
							]
					}],
					//collapsible: true,
					animCollapse: false,
					title: 'Expander Rows in a Collapsible Grid',
					iconCls: 'icon-grid',
					//renderTo: Ext.getBody()
			});
			// Define our data model
			Ext.define('Employee', {
					extend: 'Ext.data.Model',
					fields: [
							'name',
							'email',
							{ name: 'start', type: 'date', dateFormat: 'n/j/Y' },
							{ name: 'salary', type: 'float' },
							{ name: 'active', type: 'bool' }
					]
			});
			// Generate mock employee data
			var data = (function() {
					var lasts = ['Jones', 'Smith', 'Lee', 'Wilson', 'Black', 'Williams', 'Lewis', 'Johnson', 'Foot', 'Little', 'Vee', 'Train', 'Hot', 'Mutt'],
							firsts = ['Fred', 'Julie', 'Bill', 'Ted', 'Jack', 'John', 'Mark', 'Mike', 'Chris', 'Bob', 'Travis', 'Kelly', 'Sara'],
							lastLen = lasts.length,
							firstLen = firsts.length,
							usedNames = {},
							data = [],
							s = new Date(2007, 0, 1),
							now = new Date(),
							getRandomInt = function(min, max) {
									return Math.floor(Math.random() * (max - min + 1)) + min;
							},
							generateName = function() {
									var name = firsts[getRandomInt(0, firstLen - 1)] + ' ' + lasts[getRandomInt(0, lastLen - 1)];
									if (usedNames[name]) {
											return generateName();
									}
									usedNames[name] = true;
									return name;
							};
					while (s.getTime() < now.getTime()) {
							var ecount = getRandomInt(0, 3);
							for (var i = 0; i < ecount; i++) {
									var name = generateName();
									data.push({
											start : Ext.Date.add(Ext.Date.clearTime(s, true), Ext.Date.DAY, getRandomInt(0, 27)),
											name : name,
											email: name.toLowerCase().replace(' ', '.') + '@sencha-test.com',
											active: getRandomInt(0, 1),
											salary: Math.floor(getRandomInt(35000, 85000) / 1000) * 1000
									});
							}
							s = Ext.Date.add(s, Ext.Date.MONTH, 1);
					}
					return data;
			})();
			// create the Data Store
			var store2 = Ext.create('Ext.data.Store', {
					// destroy the store if the grid is destroyed
					autoDestroy: true,
					model: 'Employee',
					proxy: {
							type: 'memory'
					},
					data: data,
					sorters: [{
							property: 'start',
							direction: 'ASC'
					}]
			});
			var rowEditing = Ext.create('Ext.grid.plugin.RowEditing', {
					clicksToMoveEditor: 1,
					autoCancel: false
			});
			// create the grid and specify what field you want
			// to use for the editor at each column.
			var grid2 = Ext.create('Ext.grid.Panel', {
					store: store2,
					columns: [{
							header: 'Name',
							dataIndex: 'name',
							flex: 1,
							editor: {
									// defaults to textfield if no xtype is supplied
									allowBlank: false
							}
					}, {
							header: 'Email',
							dataIndex: 'email',
							width: 160,
							editor: {
									allowBlank: false,
									vtype: 'email'
							}
					}, {
							xtype: 'datecolumn',
							header: 'Start Date',
							dataIndex: 'start',
							width: 90,
							field: {
									xtype: 'datefield',
									allowBlank: false,
									format: 'm/d/Y',
									minValue: '01/01/2006',
									minText: 'Cannot have a start date before the company existed!',
									maxValue: Ext.Date.format(new Date(), 'm/d/Y')
							}
					}, {
							xtype: 'numbercolumn',
							header: 'Salary',
							dataIndex: 'salary',
							format: '$0,0',
							width: 90,
							editor: {
									xtype: 'numberfield',
									allowBlank: false,
									minValue: 1,
									maxValue: 150000
							}
					}, {
							xtype: 'checkcolumn',
							header: 'Active?',
							dataIndex: 'active',
							width: 60,
							editor: {
									xtype: 'checkbox',
									cls: 'x-grid-checkheader-editor'
							}
					}],
					//renderTo: 'editor-grid',
					//width: 600,
					//height: 400,
					layout:'fit',
					autoScroll:true,
					title: 'Employee Salaries',
					//frame: true,
					tbar: [{
							text: 'Add Employee',
							iconCls: 'employee-add',
							handler : function() {
									rowEditing.cancelEdit();
									// Create a record instance through the ModelManager
									var r = Ext.ModelManager.create({
											name: 'New Guy',
											email: 'new@sencha-test.com',
											start: new Date(),
											salary: 50000,
											active: true
									}, 'Employee');
									store.insert(0, r);
									rowEditing.startEdit(0, 0);
							}
					}, {
							itemId: 'removeEmployee',
							text: 'Remove Employee',
							iconCls: 'employee-remove',
							handler: function() {
									var sm = grid.getSelectionModel();
									rowEditing.cancelEdit();
									store.remove(sm.getSelection());
									sm.select(0);
							},
							disabled: true
					}],
					plugins: [rowEditing],
					listeners: {
							'selectionchange': function(view, records) {
									grid.down('#removeEmployee').setDisabled(!records.length);
							}
					}
			});
			var propsGrid = Ext.create('Ext.grid.property.Grid', {
						//width: 300,
						//renderTo: 'grid-container',
						title: 'Properties Grid',
						frame: false,
					layout:'fit',
					autoScroll:true,
						propertyNames: {
								tested: 'QA',
								borderWidth: 'Border Width'
						},
						source: {
								"(name)": "Properties Grid",
								"grouping": false,
								"autoFitColumns": true,
								"productionQuality": false,
								"created": Ext.Date.parse('10/15/2006', 'm/d/Y'),
								"tested": false,
								"version": 0.01,
								"borderWidth": 1
						}
				});
		
		var tree = new Ext.tree.TreePanel({
			root:{text:'root', id:'root', expanded:true, children:[{
				text:'Child 1'
				,data:'Child 1 additional data'
				,children:[{
					text:'Child 1 Subchild 1'
					,data:'Some additional data of Child 1 Subchild 1'
					,leaf:true
				},{
					text:'Child 1 Subchild 2'
					,data:'Some additional data of Child 1 Subchild 2'
					,leaf:true
				}]
				},{
					text:'Child 2'
					,leaf:true
					,data:'Last but not least. Data of Child 2'
				},{
					text:'Child 3'
					,leaf:true
					,data:'Last but not least. Data of Child 2'
				},{
					text:'Child 4'
					,leaf:true
					,data:'Last but not least. Data of Child 2'
				},{
					text:'Child 5'
					,leaf:true
					,data:'Last but not least. Data of Child 2'
				},{
					text:'Child 6'
					,leaf:true
					,data:'Last but not least. Data of Child 2'
				},{
					text:'Child 7'
					,leaf:true
					,data:'Last but not least. Data of Child 2'
				}]}
			//,loader:new Ext.tree.TreeLoader({preloadChildren:true})
			//,enableDrag:true
			,ddGroup:'t2div'
			,region:'east'
			,title:'Actions'
			,layout:'fit'
			,width:200
			,split:true
			,collapsible:true
			,autoScroll:true
			,rootVisible:false
			,listeners:{
				startdrag:function() {
					var t = Ext.getCmp('target').body.child('div.drop-target');
					if(t) {
						t.applyStyles({'background-color':'#f0f0f0'});
					}
				}
				,enddrag:function() {
					var t = Ext.getCmp('target').body.child('div.drop-target');
					if(t) {
						t.applyStyles({'background-color':'white'});
					}
				}
			}
		});
		////////////////////////////////////////////////////////////////////////////////////////
		var win1;
		
		
		var dateMenu = Ext.create('Ext.menu.DatePicker', {
					handler: function(dp, date){
							Ext.example.msg('Date Selected', 'You choose {0}.', Ext.Date.format(date, 'M j, Y'));
					}
			});
			var colorMenu = Ext.create('Ext.menu.ColorPicker', {
					handler: function(cm, color){
							Ext.example.msg('Color Selected', '<span style="color:#' + color + ';">You choose {0}.</span>', color);
					}
			});
			var store = Ext.create('Ext.data.ArrayStore', {
					fields: ['abbr', 'state'],
					data : Ext.example.states
			});
			var combo = Ext.create('Ext.form.field.ComboBox', {
					hideLabel: true,
					store: store,
					displayField: 'state',
					typeAhead: true,
					queryMode: 'local',
					triggerAction: 'all',
					emptyText: 'Select a state...',
					selectOnFocus: true,
					width: 135,
					iconCls: 'no-icon'
			});
			var menu = Ext.create('Ext.menu.Menu', {
					id: 'mainMenu',
					style: {
							overflow: 'visible'     // For the Combo popup
					},
					items: [
							combo,                  // A Field in a Menu
							{
									text: 'I like Ext',
									checked: true,       // when checked has a boolean value, it is assumed to be a CheckItem
									checkHandler: onItemCheck
							}, '-', {
									text: 'Radio Options',
									menu: {        // <-- submenu by nested config object
											items: [
													// stick any markup in a menu
													'<b class="menu-title">Choose a Theme</b>',
													{
															text: 'Aero Glass',
															checked: true,
															group: 'theme',
															checkHandler: onItemCheck
													}, {
															text: 'Vista Black',
															checked: false,
															group: 'theme',
															checkHandler: onItemCheck
													}, {
															text: 'Gray Theme',
															checked: false,
															group: 'theme',
															checkHandler: onItemCheck
													}, {
															text: 'Default Theme',
															checked: false,
															group: 'theme',
															checkHandler: onItemCheck
													}
											]
									}
						 },{
								 text: 'Choose a Date',
								 iconCls: 'calendar',
								 menu: dateMenu // <-- submenu by reference
						 },{
								 text: 'Choose a Color',
								 menu: colorMenu // <-- submenu by reference
						 }
					]
			});
			var tb = Ext.create('Ext.toolbar.Toolbar');
			//tb.suspendLayout = true;
			//tb.render('toolbar');
			tb.add({
							text:'Button w/ Menu',
							iconCls: 'bmenu',  // <-- icon
							menu: menu  // assign menu by instance
					}, {
							text: 'Users',
							iconCls: 'user',
							menu: {
									xtype: 'menu',
									plain: true,
									items: {
											xtype: 'buttongroup',
											title: 'User options',
											columns: 2,
											defaults: {
													xtype: 'button',
													scale: 'large',
													iconAlign: 'left'
											},
											items: [{
													text: 'User<br/>manager',
													iconCls: 'edit',
													width: 90
											},{
													iconCls: 'add',
													width: 'auto',
													tooltip: 'Add user',
													width: 40
											},{
													colspan: 2,
													text: 'Import',
													scale: 'small',
													width: 130
											},{
													colspan: 2,
													text: 'Who is online?',
													scale: 'small',
													width: 130
											}]
									}
							}
					},
					Ext.create('Ext.button.Button', {
						text: 'Dialog Btn',
						handler: onButtonClickWindows,
						tooltip: {text:'This is a an example QuickTip for a toolbar item', title:'Tip Title'},
						iconCls: 'blist'
					}),
					Ext.create('Ext.button.Split', {
							text: 'Split Button',
							handler: onButtonClick,
							tooltip: {text:'This is a an example QuickTip for a toolbar item', title:'Tip Title'},
							iconCls: 'blist',
							// Menus can be built/referenced by using nested menu config objects
							menu : {
									items: [{
											text: '<b>Bold</b>', handler: onItemClick
									}, {
											text: '<i>Italic</i>', handler: onItemClick
									}, {
											text: '<u>Underline</u>', handler: onItemClick
									}, '-', {
											text: 'Pick a Color',
											handler: onItemClick,
											menu: {
													showSeparator: false,
													items: [
															Ext.create('Ext.ColorPalette', {
																	listeners: {
																			select: function(cp, color){
																					Ext.example.msg('Color Selected', 'You chose {0}.', color);
																			}
																	}
															}), '-',
															{
																	text: 'More Colors...',
																	handler: onItemClick
															}
													]
											}
									}, {
											text: 'Extellent!',
											handler: onItemClick
									}]
							}
					}), '-', {
					text: 'Toggle Me',
					enableToggle: true,
					toggleHandler: onItemToggle,
					pressed: true
			});
			menu.add(' ');
			// Menus have a rich api for
			// adding and removing elements dynamically
			var item = menu.add({
					text: 'Dynamically added Item'
			});
			// items support full Observable API
			item.on('click', onItemClick);
			// items can easily be looked up
			menu.add({
					text: 'Disabled Item',
					id: 'disableMe'  // <-- Items can also have an id for easy lookup
					// disabled: true   <-- allowed but for sake of example we use long way below
			});
			// access items by id or index
			menu.items.get('disableMe').disable();
			// They can also be referenced by id in or components
			tb.add('-', {
					icon: '/assets/images/icons/list-items.gif', // icons can also be specified inline
					cls: 'x-btn-icon',
					tooltip: '<b>Quick Tips</b><br/>Icon only button with tooltip',
					handler: function(){
							Ext.example.msg('Button Click','You clicked the "icon only" button.');
					}
			}, '-');
			var scrollMenu = Ext.create('Ext.menu.Menu');
			for (var i = 0; i < 50; ++i){
					scrollMenu.add({
							text: 'Item ' + (i + 1),
							handler: onItemClick
					});
			}
			// scrollable menu
			tb.add({
					icon: '/assets/images/icons/preview.png',
					cls: 'x-btn-text-icon',
					text: 'Scrolling Menu',
					menu: scrollMenu
			});
			tb.add({
					text: 'Link',
					url: 'http://www.google.com/search',
					baseParams: {
							q: 'html+anchor+tag'
					},
					tooltip: 'This is a link. You can right click. You can see where it will take you'
			});
			// add a combobox to the toolbar
			var combo = Ext.create('Ext.form.field.ComboBox', {
					hideLabel: true,
					store: store,
					displayField: 'state',
					typeAhead: true,
					mode: 'local',
					triggerAction: 'all',
					emptyText:'Select a state...',
					selectOnFocus:true,
					width:135
			});
			tb.add(combo);
			//tb.suspendLayout = false;
			//tb.doLayout();
			// functions to display feedback
			function onButtonClick(btn){
					Ext.example.msg('Button Click','You clicked the "{0}" button.', btn.text);
			}
			function onButtonClickWindows(btn) {
				 if (!win) {
							 win = Ext.create('widget.window', {
									 title: 'Layout Window',
									 closable: true,
									 closeAction: 'hide',
									 //animateTarget: this,
									 modal: true,
									 width: 650,
									 height: 450,
									 layout: 'border',
									 bodyStyle: 'padding: 5px;',
									 items: [{
											 region: 'west',
											 title: 'Navigation',
											 width: 200,
											 split: true,
											 collapsible: true,
											 floatable: false
									 }, {
											 region: 'center',
											 xtype: 'tabpanel',
											 items: [form5
											 ,{
													 title: 'Bogus Tab',
													 html: 'Hello world 1'
											 }, {
													 title: 'Another Tab',
													 html: 'Hello world 2'
											 }, {
													 title: 'Closable Tab',
													 html: 'Hello world 3',
													 closable: true
											 }]
									 }]
							 });
					 }
					 //button.dom.disabled = true;
					 if (win.isVisible()) {
							 win.hide(this, function() {
									 //button.dom.disabled = false;
							 });
					 } else {
							 win.show(this, function() {
									 //button.dom.disabled = false;
							 });
					 }
			}
			function onItemClick(item){
					Ext.example.msg('Menu Click', 'You clicked the "{0}" menu item.', item.text);
			}
			function onItemCheck(item, checked){
					Ext.example.msg('Item Check', 'You {1} the "{0}" menu item.', item.text, checked ? 'checked' : 'unchecked');
			}
			function onItemToggle(item, pressed){
					Ext.example.msg('Button Toggled', 'Button "{0}" was toggled to {1}.', item.text, pressed);
			}
		////////////////////////////////////////////////////////////////////////////////////////
		/*
		 * ================  Form 5  =======================
		 */
		 var form5 = Ext.create('Ext.form.Panel', {
		        title: 'Inner Tabs',
		        bodyStyle:'padding:5px',
		        width: 600,
		        fieldDefaults: {
		            labelAlign: 'top',
		            msgTarget: 'side'
		        },
		        defaults: {
		            anchor: '100%'
		        },

		        items: [{
		            layout:'column',
		            border:false,
		            items:[{
		                columnWidth:.5,
		                border:false,
		                layout: 'anchor',
		                defaultType: 'textfield',
		                items: [{
		                    fieldLabel: 'First Name',
		                    name: 'first',
		                    anchor:'95%'
		                }, {
		                    fieldLabel: 'Company',
		                    name: 'company',
		                    anchor:'95%'
		                }]
		            },{
		                columnWidth:.5,
		                border:false,
		                layout: 'anchor',
		                defaultType: 'textfield',
		                items: [{
		                    fieldLabel: 'Last Name',
		                    name: 'last',
		                    anchor:'95%'
		                },{
		                    fieldLabel: 'Email',
		                    name: 'email',
		                    vtype:'email',
		                    anchor:'95%'
		                }]
		            }]
		        },{
		            xtype:'tabpanel',
		            plain:true,
		            activeTab: 0,
		            height:235,
		            defaults:{bodyStyle:'padding:10px'},
		            items:[{
		                title:'Personal Details',
		                defaults: {width: 230},
		                defaultType: 'textfield',

		                items: [{
		                    fieldLabel: 'First Name',
		                    name: 'first',
		                    allowBlank:false,
		                    value: 'Jamie'
		                },{
		                    fieldLabel: 'Last Name',
		                    name: 'last',
		                    value: 'Avins'
		                },{
		                    fieldLabel: 'Company',
		                    name: 'company',
		                    value: 'Ext JS'
		                }, {
		                    fieldLabel: 'Email',
		                    name: 'email',
		                    vtype:'email'
		                }]
		            },{
		                title:'Phone Numbers',
		                defaults: {width: 230},
		                defaultType: 'textfield',

		                items: [{
		                    fieldLabel: 'Home',
		                    name: 'home',
		                    value: '(888) 555-1212'
		                },{
		                    fieldLabel: 'Business',
		                    name: 'business'
		                },{
		                    fieldLabel: 'Mobile',
		                    name: 'mobile'
		                },{
		                    fieldLabel: 'Fax',
		                    name: 'fax'
		                }]
		            },{
		                cls: 'x-plain',
		                title: 'Biography',
		                layout: 'fit',
		                items: {
		                    xtype: 'htmleditor',
		                    name: 'bio2',
		                    fieldLabel: 'Biography'
		                }
		            }]
		        }],

		        buttons: [{
		            text: 'Save'
		        },{
		            text: 'Cancel'
		        }]
		    });
		
		////////////////////////////////////////////////////////////////////////////////////////
		// Main Panel
		////////////////////////////////////////////////////////////////////////////////////////
		 var panel = new Ext.Panel({
			title:'Basic Panel'
			,id:'main-wrap'
			,layout:'border'
			,border:false
			,preventHeader:true
			,width:'auto'
			,height:620
			,renderTo:'wrap'
			,items:[{
				region:'center'
				,layout:'fit'
				,frame:false
				,border:true
				,xtype:'tabpanel'
				,items:[grid
				,grid1
				,grid2
				,propsGrid
				,{
					title:'Forms'
					,tbar: tb
					,html: "My content 1 was added during construction."
				},{
					title:'Tab 2'
					,html: "My content 2 was added during construction."
				},{
					title:'Tab 3'
					,html: "My content 3 was added during construction."
				}]
				,bbar: Ext.create('Ext.ux.StatusBar', {
					id: 'basic-statusbar',
					// defaults to use when the status is cleared:
					defaultText: 'Default status text',
					//defaultIconCls: 'default-icon',
				
					// values to set initially:
					text: 'Ready',
					iconCls: 'x-status-valid',
					// any standard Toolbar items:
					items: [
						{
							xtype: 'button',
							text: 'Show Warning & Clear',
							handler: function (){
								var sb = Ext.getCmp('basic-statusbar');
								sb.setStatus({
									text: 'Oops!',
									iconCls: 'x-status-error',
									clear: true // auto-clear after a set interval
								});
							}
						},
						{
							xtype: 'button',
							text: 'Show Busy',
							handler: function (){
								var sb = Ext.getCmp('basic-statusbar');
								// Set the status bar to show that something is processing:
								sb.showBusy();
							}
						},
						{
							xtype: 'button',
							text: 'Clear status',
							handler: function (){
								var sb = Ext.getCmp('basic-statusbar');
								// once completed
								sb.clearStatus(); 
							}
						},
						'-',
						'Plain Text'
					]
				})
			},tree]
		});
	});
</script>
<div id="wrap">
</div>