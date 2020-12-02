# About Euax Group
If you have arrived here and do not know what this page is about, visit our page at [Euax Group](https://grupoeuax.com.br/carreira/) and find out more about us, then come back and take part into our challenge for a Web Developer position.

# Web Developer Challenge

Hello, you have just been hired as a developer at a big corporation, and you receive your first assignments to work at. Your company does not use ARTIA to manage projects and tasks, and you need a better way to manage your tasks and so you decide to develop your own solution so you can manage your deliveries.

## The Problem

You need to be able to create projects with start and end date, a project may have 1 or N tasks which also need to have start and end date, and finally you will need to be able to view which percentage of the project has been done and also if the project might be delayed. The completed percentage of the project should be measured by the ratio of tasks completed and the total number of tasks within the project. A project might be delayed if the latest end date of the tasks within the project is later than the end date of the project.

Example of data model

#### Projects Table
| Column          | Type    | Required     |
| :-------------- | :-----: | -----------: |
| Project Name    | Text    | Yes          |
| Start Date      | Date    | Yes          |
| End Date        | Date    | Yes          |

#### Tasks Table
| Column            | Type    | Required     |
| :--------------   | :-----: | -----------: |
| Project ID        | Integer | Yes          |
| Task Name         | Text    | Yes          |
| Start Date        | Date    | Yes          |
| End Date          | Date    | Yes          |
| Completed?        | Boolean | No           |

## Exemplos

#### Exemplo 1

| Project ID | Project Name | Start Date  | End Date   | % Completed | Delayed |
| :--------- | :----------: | ----------: | ---------: | ---------: | -------: |
| 1          | Project 1    | 01/01/2019  | 31/01/2019 | 50%        | No       |

| Task ID    | Project ID | Task Name        | Start Date  | End Date   | Completed? |
| :---------- | :---------: | -------------: | ----------: | ---------: | ----------: |
| 1          | 1            | Task 1         | 06/01/2019  | 15/01/2019 | Yes                 |
| 2          | 1            | Task 2         | 16/01/2019  | 31/01/2019 | No                  |

#### Exemplo 2

| Project ID | Project Name | Start Date  | End Date   | % Completed | Delayed |
| :--------- | :----------: | ----------: | ---------: | ---------: | -------: |
| 2          | Project 2    | 01/02/2019  | 28/02/2019 | 0%         | Yes      |

| Task ID    | Project ID | Task Name        | Start Date  | End Date   | Completed? |
| :---------- | :---------: | -------------: | ----------: | ---------: | ----------: |
| 1          | 2            | Task 1         | 01/02/2019  | 10/02/2019 | No                  |
| 2          | 2            | Task 2         | 11/02/2019  | 20/02/2019 | No                  |
| 3          | 2            | Task 3         | 21/02/2019  | 02/03/2019 | No                  |

## Evaluation
Create a README file in the project explaining which technologies have been used in the implementation.
* Use your creativity and knowledge to build pages to create and list records;
* You may use any language and technologies you feel comfortable, we will setup a call to review your solution;
* Keep your code clean and organized, it will make a difference;
* We only require the creation and lists for the review, but any improvements, such as edits and deletes, will count extra.

## Observations
If you got stuck or cannot complete the challenge by any means, you should send us anyway, your effort will count and we will review whatever you deliver us.

Good Luck
