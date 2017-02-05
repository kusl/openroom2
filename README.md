Please note that this project is currently in an unusable state. 
It is only for development work.
Contributions are very welcome.

The plan is to be GNU General Public License version 3.0 (GPLv3) when complete. 

In a normalized relational model the foreign key is saved on the Bug’s table,
hence in our object-relation model the Bug is at the owning side of the relation.
You should always make sure that the use-cases of your domain model should drive 
which side is an inverse or owning one in your Doctrine mapping.
In our example, whenever a new bug is saved or an engineer is assigned to the bug,
we don’t want to update the User to persist the reference, but the Bug.
This is the case with the Bug being at the owning side of the relation.

So in another case, we have the relation between a room and its room hours. 

Resource has id, name, group, position, capacity, description, and resource hours. 
ResourceHours has id, resource id, status, start date, end date, start time, end time. 

One idea is to keep things simple and not deviate too much from the existing design in 1.4. 

Another is to start with something that barely works, and is inefficient but leaves options open. 
In any case, I need to know what assumptions I make in my code.

Rooms

| Id      | Name        | Description     | GroupID     | Position        | Capacity        | 
|---------|-------------|-----------------|-------------|-----------------|-----------------|
|1        |101          |Waldo Conference |1            |1                |12               |
|2        |102          |Lenexa Cozy      |1            |2                |4   

RoomHours 

| ID      | RoomId      | StartDate                 | EndDate                   | StartTime                 | EndTime                   | Status        |
|---------|-------------|---------------------------|---------------------------|---------------------------|---------------------------|---------------|
|1        |1            |2016-12-29 13:58:49 +0000  |2016-12-29 13:58:49 +0000  |2016-12-29 13:58:49 +0000  |2016-12-29 13:58:49 +0000  |Reserved       |
|2        |1            |2016-12-30 13:58:49 +0000  |2016-12-30 13:58:49 +0000  |2016-12-30 13:58:49 +0000  |2016-12-30 13:58:49 +0000  |Reserved       |
