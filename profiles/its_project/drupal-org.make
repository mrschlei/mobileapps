; its_project make file for d.o. usage
core = "7.x"
api = "2"

; +++++ Modules +++++

projects[content_access][version] = "1.2-beta2"
projects[content_access][subdir] = "contrib"

projects[ctools][version] = "1.7"
projects[ctools][subdir] = "contrib"

projects[custom_breadcrumbs][version] = "2.0-beta1"
projects[custom_breadcrumbs][subdir] = "contrib"

projects[date][version] = "2.8"
projects[date][subdir] = "contrib"

projects[profiler_builder][version] = "1.2"
projects[profiler_builder][subdir] = "contrib"

projects[ckeditor][version] = "1.16"
projects[ckeditor][subdir] = "contrib"

projects[views][version] = "3.11"
projects[views][subdir] = "contrib"

projects[webform][version] = "3.24"
projects[webform][subdir] = "contrib"

; +++++ TODO modules without versions +++++

projects[cosign_auth][version] = "" ; TODO add version
projects[cosign_auth][subdir] = "contrib"

; +++++ Themes +++++

; bootstrap
projects[bootstrap][type] = "theme"
projects[bootstrap][version] = "3.0"
projects[bootstrap][subdir] = "contrib"

; zen
projects[zen][type] = "theme"
projects[zen][version] = "3.3"
projects[zen][subdir] = "contrib"

