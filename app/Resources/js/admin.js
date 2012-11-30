var Admin = {

    init: function(e){

        this.initActionButtons();
    },

    initActionButtons: function(){
        var self = this;

        $("#addProject").bind('click', function(e){
            self.removeProjectListSection();
            $("#middle-container").html( _.template(Templates.AddProject, {}) );

            $("#middle-container").find("#members").select2({tags:["red", "green", "blue"]});
            $("#middle-container").find(".datepicker").datepicker();
        });

        $("#project-list li a").bind('click', function(e){
            $("#middle-container").html( _.template(Templates.ProjectDetails, {}) );
        });
    },

    removeProjectListSection:function(){

        $("#project-list li").removeClass('active');
    }
};


