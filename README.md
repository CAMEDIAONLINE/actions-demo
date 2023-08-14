# actions-demo
Different Workflow Action Tests 


## Workflows

### MasterDeployCI

Status: **disabled**
Uses Actions: 
* actions/checkout@v1
* anothrNick/github-tag-action@master

### CipolloRelease

Status: **disabled**
Uses Actions:
* actions/checkout@v3
* ncipollo/release-action@v1

### CipolloReleaseWithUpload

Status: **enabled**
Uses Actions:
* actions/checkout@v3
* ncipollo/release-action@v1
* actions/upload-release-asset@v1