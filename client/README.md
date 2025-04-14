Frontend Development File Structure and Rules:

1.  Everything outside of features directory should be usable globally. (ex. If its a reusable component amongst different pages, add it to components outside of features.)

2.  When trying to add a feature first acknowledge if it is a standalone feature or if it should be iin an existing module.
    If the feature is a standalone feature create a new directory under feature directory.
    If the feature is NOT a standalone feature add to existing directories (ex. add LoginPage and RegisterPage in pages of auth rather than seperating it in login folder and register folder).
3.  Naming Convention to Follow
    Components and Views - PascalCase
    Hooks - camelCase
    Functions - camelCase
    Variables - camelCase
    Types & Interface - PascalCase
    Folders - camelCase
    Files (non-components) - camelCase
    Routes - kebab-case

examples:
camelCase - useLogin (lowercase first word, uppercase following words)
PascalCase - LoginPage (Uppercase each starting letter of a word.)
kebab-case - /user-profile (seperated by a '-')

This is the initial documentation for Frontend Development. It will be updated and expanded as new questions arise or changes are made to the project.
