module.exports = function(grunt) {

    grunt.initConfig({

        watch: {
            scripts: {
              files: ['style.scss'],
              tasks: ['sass'],
            },
          },

        sass: {
          dist: {
            files: {
              'style.css': 'src/scss/main.scss'
            }
          },
        },
      });

      grunt.loadNpmTasks('grunt-contrib-watch');
      grunt.loadNpmTasks('grunt-contrib-sass');
 
      grunt.registerTask('default', ['sass']);
  
  };