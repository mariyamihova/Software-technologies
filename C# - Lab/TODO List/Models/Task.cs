﻿
using System.ComponentModel.DataAnnotations;

namespace TODO_List.Models
{
    public class Task
    {
        public int Id { get; set; }
        [Required]
        public string Title { get; set; }
    }
}