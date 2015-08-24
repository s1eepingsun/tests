require.config({
    paths: {
      underscore: 'libs/underscore-min',
			backbone: 'libs/backbone',
			json2: 'libs/json2',
			jquery: 'libs/jquery-1.11.2.min'	
    }
});

require(['models/Champion', 'views/ChampInfo', 'models/Combat'], function(Champion, ChampInfo, Combat) {

	//var search_view = new SearchView({ el: $("#search_container") });
	var warrior = new Champion({ name: "Rand", age: 20});
	var rogue = new Champion({ name: "Matrim", age: 20});
	var ranger = new Champion({ name: "Perrin", age: 20});
	
	console.log(warrior.toJSON());
	
	
	var champ_info = new ChampInfo({ el: $(".fighter1-info"), model: warrior });
	var champ_info = new ChampInfo({ el: $(".fighter2-info"), model: rogue });
	
	//setTimeout(warrior.set({ name: 'asdf'}), 3000);
	//setTimeout(console.log('3000'), 30000);
	
	var fight = new Combat({fighter1: warrior, fighter2: rogue});
	fight.attack(rogue, warrior);
	
	
	
});


define(['backbone'], function(Backbone) {

	Champion = Backbone.Model.extend({

		defaults: {
			name: 'Champion',
			age: 1,
			child: '',
			health: 100,
			attack: 10,
			defense: 1
		},
		validate: function( attributes ){
			if( attributes.age < 0 && attributes.name != "Dr Manhatten" ){
				return "You can't be negative years old";
			}
		},
		initialize: function(){
			this.on("change:name", function(model){
				var name = model.get("name"); 
				console.log("Changed my name to " + name );
			});
			this.bind("invalid", function(model, invalid){
				console.log('an error has occured: ' + person.validationError);
			});
		},
		adopt: function( newChildsName ){
			this.set({ child: newChildsName });
		}
		
	});
	
	return Champion;

});


define(['backbone'], function(Backbone) {

	var Combat = Backbone.Model.extend({
	
		attack: function(attacker, defender) {
		
			console.log('att');
			console.log(attacker);
			
			var fighter1 = this.attributes.fighter1;
			var fighter2 = this.attributes.fighter2;
			var name1 = fighter1.attributes.name;
			var name2 = fighter2.attributes.name;
			console.log('this');
			console.log(fighter1.attributes);
			console.log(fighter2.attributes);
			
			fighter2.attributes.health = fighter2.attributes.health - (fighter1.attributes.attack - fighter2.attributes.defense);
			console.log(name1 + ' hit ' + name2 + ' for ' + (fighter1.attributes.attack - fighter2.attributes.defense) );
			console.log(fighter2.attributes.health);

		}
	
	});
	
	return Combat;
	
});


define(['backbone'], function(Backbone) {
	
	var ChampInfo = Backbone.View.extend({
		initialize: function(){
		   this.render();
		   this.listenTo(this.model, "change", this.render);
		},
		render: function(){
			var name = this.model.get('name');
			var health = this.model.get('health');
			var attack = this.model.get('attack');
			var defense = this.model.get('defense');
			
			var variables = {
				champ_name: name,
				champ_health: health,
				champ_attack: attack,
				champ_defense: defense
			};
			// Compile the template using underscore
			var template = _.template( $("#chammp_template").html(), variables );
			// Load the compiled HTML into the Backbone "el"
			this.$el.html( template );
		},
		events: {
			"click div": "showLogs"
		},
		showLogs: function(event){
			// Button clicked, you can access the element that was clicked with event.currentTarget
			console.log(this.model);
			console.log(this.model.get('name'));
			//this.model.set({name: 'reborn'});
			//console.log(this.model.get('name'));
		}
	});
		
	return ChampInfo;
});







