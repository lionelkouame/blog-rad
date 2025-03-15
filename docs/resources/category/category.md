## Create a new category
- [ ] Authors and Administrators **MUST** be able to create a new category
- [x] The category **MUST** have code, name, description, extract, createdAt, updatedAt
- [ ] The category **MUST** have a unique code
- [ ] The category **MAY** have a parent category
- [ ] The category **MAY** have a child category
- [ ] update_at and create_at MUST be automatically generated
- [ ] The category **MUST** have  draft status in the beginning


### The category **MUST** have a unique code
The unique code **MUST** have automatically generated.
The unique code **MUST** have a concatenation of category name and timestamp(integer). 
for exemple if the category name is "category" and the timestamp is 2021-01-01 00:00:00,
the unique code will be "category-1609459200".
