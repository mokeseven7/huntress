# HuntressQL

The data models from the public huntress rest api rewritten as graphql api types using Laravel. 

[GraphQL Explorer](http://143.198.70.148/graphiql). 

[Commit Without Laravel Source In Diff](https://github.com/mokeseven7/huntress/commit/93cc14512ec9f110d60d8ddd156dccda0fc7abed)

Full type docs available via the left most sidenav.
![HuntressQL](https://i.ibb.co/MNHgg6T/huntressql.png)




## Sample Queries: 
Reports
```graphql
query GetReports {
  incidentReports {
    indicator_counts {
      ransomware_canaries
    }
    status
    agent {
      os_major
    }
    account {
      name
      subdomain
    }
    organization {
      name
    }
  }
}
```

Accounts:
```graphql
query getAccount {
  agent(id: 1){
    id
    account {
      id
      name
      subdomain
    }
  }
}
```

Check the docs in the graphql explorer for full type list