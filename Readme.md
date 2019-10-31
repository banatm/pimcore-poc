
#Setup
Run 
```docker-compose up```

#Example graphql queries:
use http://{IP}:2000/pimcore-graphql-webservices/test?apikey={APIKEY}
demo apikey is 'qwerty1234567890'

```query {
  getProductListing(first: 10) {
    edges {
      node {
        id
        Code
        Name
        Categories {
          ... on object_Category {
            Name
            ParentCategory {
              ... on object_Category {
                Name
              }
            }
          }
        }
      }
    }
    totalCount
  }
}```

```
query{
  getProduct(id: 445){
    id
    classname
    Code
    Name
    Description
    silab_id
    Categories{
          ... on object_Category {
            Name
            ParentCategory {
              ... on object_Category {
                Name
              }
            }
          }
    }    
  }
}
```