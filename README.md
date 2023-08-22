# actions-demo
Different Workflow Action Tests 


## Workflows

Tryout of several workflows to automatic release:

1. Create a changelog of all commits between two tags
2. Create release and include the changelog
3. Add a zip-file as artifact to download

### Create a changelog

The problem seems to be to find an action or way 
to only get commit messages of the commits between the
last tag and the current tag.
