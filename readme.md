I'm trying things out on the seasons theme so I decided to use git to try and roll back any major errors. While doing that I figured why not back it up to github?'

I will also list other changes I have made to the installed packages here so that I have a record of them for upgrading / moving server.


Have updated Omeka to version 2.2.2. Due to display issues with the timeline (breaks the borders on the page) and the display of thumbnails on the 'exhibits' page we have retained the style.css from the seasons theme which accompanied Omeka version 2.

# PDF display
We have changed code in items/show.php to display pdfs vis pdf.js (installed in /var) and to not display the same pdfs via the document viewer plugin. We are hanging onto the document viewer plugin to display other file formats.

# Timeline
We have changed the default Timeline height to 350px on line 7 of /var/www/html/plugins/NeatlineTime/views/shared/css/neatlinetime-timeline.css

Removed 'Dublin Core' heading on item pages as specified here: http://omeka.org/forums/topic/remove-dublin-core-from-publi-pages

Just testing the pull request on your project, i am student by the way and i am learning to use git & github !
