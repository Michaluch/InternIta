/**
 * Created by arthur on 30.06.15.
 */

    window.App = {
        Models: {},
        Views:{},
        Collections:{}
    }
    App.Models.Login = Backbone.Model.extend({
        urlRoot : '/internita/public/login',
        defaults : {
            email : 'admin@gmail.com',
            password : '111'
        },
        validate : {

        }
    });
    App.Views.Login = Backbone.View.extend({
        el : '#login',
        initialize: function() {
            console.log(this.el);
            console.log(this.$el);
        },
        events:{
            'click #signIn' : 'signIn'
        },
        signIn : function(event){
            event.preventDefault();
            console.log('Loggin in... ');
            this.model.set('email', $('#email').val());
            this.model.set('password', $('#password').val());
            this.model.fetch()
        }
    });
    var loginModel = new App.Models.Login();
    var loginView = new App.Views.Login({model : loginModel});
