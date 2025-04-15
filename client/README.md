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

---

## 📦 Installed Libraries

This section lists all the libraries currently used in the project, categorized into **dependencies** and **devDependencies**, along with a brief description for each.

### 🧩 Runtime Dependencies

| Library               | Description                                                                 |
|-----------------------|-----------------------------------------------------------------------------|
| `@tailwindcss/vite`   | Integrates Tailwind CSS with Vite for efficient build and dev experience    |
| `lucide-react`        | Beautifully simple and customizable icon set for React                     |
| `react`               | Core library for building user interfaces                                   |
| `react-dom`           | React DOM rendering bindings                                                |
| `react-icons`         | Popular icons (FontAwesome, Material, etc.) as React components             |
| `react-router-dom`    | Declarative routing for React web apps                                      |

### 🛠️ Development Dependencies

| Library                       | Description                                                           |
|-------------------------------|-----------------------------------------------------------------------|
| `@eslint/js`                  | ESLint's core rules as a standalone package                           |
| `@types/react`               | TypeScript type definitions for React                                 |
| `@types/react-dom`           | TypeScript types for React DOM                                        |
| `@vitejs/plugin-react`       | Official Vite plugin to support React + fast HMR                      |
| `autoprefixer`               | PostCSS plugin to add vendor prefixes automatically                   |
| `eslint`                     | Tool for identifying and fixing problems in JavaScript/TypeScript code|
| `eslint-plugin-react-hooks`  | ESLint rules for enforcing React Hooks conventions                    |
| `eslint-plugin-react-refresh`| ESLint plugin for React Fast Refresh                                  |
| `globals`                    | List of global variables as defined by various environments           |
| `postcss`                    | Tool for transforming CSS with JavaScript                             |
| `tailwindcss`                | Utility-first CSS framework                                           |
| `typescript`                 | Static type checking for JavaScript                                   |
| `typescript-eslint`          | Integrates TypeScript with ESLint                                     |
| `vite`                       | Next-generation frontend tooling for faster builds and HMR            |

> 📌 As new libraries are added, remember to update this list with a short, helpful description.