
module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    less: {
      compileCore: {
        src: 'less/bootstrap.less',
        dest: 'dist/css/bootstrap.css'
      },
      compileTheme: {
        src: 'less/theme.less',
        dest: 'dist/css/bootstrap-theme.css'
      }
    },
    watch: {
      less: {
        files: ["**/*.less"],
        tasks: ['less'],
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['less']);

};