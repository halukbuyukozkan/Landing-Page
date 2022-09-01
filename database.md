# User
- id
- email
...

# Slider
- id
- slug
- title
- image
- description nullable

# Contact
- id
- name
- email
- phone
- message text

# Category
- id
- title
- description nullable
- position uint
- active bool

# Product
- id
- category_id
- title
- slug
- description
- position uint