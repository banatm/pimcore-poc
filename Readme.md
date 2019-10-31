
# Setup
1. Run ```docker-compose up```
2. Import definitions by
  ```
  docker exec -it pimcore-app bash
  ./bin/console data-definitions:import -d synevo-ro-main-categories
  ./bin/console data-definitions:import -d synevo-ro-subcategories
  ./bin/console data-definitions:import -d synevo-ro-products
  ```

# Example graphql queries:
## endpoint
use http://{IP}:2000/pimcore-graphql-webservices/test?apikey={APIKEY}
demo apikey is 'qwerty1234567890'

## query product lists
``` query {
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
}
```

## get product details
```
query{
  getProduct(id: 117){
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
