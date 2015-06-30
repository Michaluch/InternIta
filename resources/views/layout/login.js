/**
 * Created by arthur on 30.06.15.
 */
(function(){
    window.App = {
        Models: {},
        Views:{},
        Collections:{}
    }
    App.Models.Login = Backbone.Model.extend({
        urlRoot : '/internIta.2/public/auth/login',
        defaults : {
            email : 'admin@gmail.com',
            password : '111'
        },
        validate : {

        }
    });
    App.Views.Login = Backbone.View.extend({
        el : '#login',
        events:{
            'click #signIn' : 'signIn'
        },
        signIn : function(event){
            event.preventDefault();
            console.log('Loggin in... ');
            this.model.set('email', $('#email').val(), {validate : true});
            this.model.set('password', $('#password').val(), {validate : true});
            this.model.send()
        }
    });
    var loginModel = new App.Models.Login();
    var loginView = new App.Views.Login({model : loginModel});
})();