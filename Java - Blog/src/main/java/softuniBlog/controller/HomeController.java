package softuniBlog.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import softuniBlog.entity.Article;
import softuniBlog.repository.ArticleRepository;

import java.util.List;

@Controller
public class HomeController {
    @Autowired
private ArticleRepository articleRepository;
    @GetMapping("/")
    public String index(Model model) {

        List<Article> articles=this.articleRepository.findAll();
        model.addAttribute("view", "home/index");
        model.addAttribute("articles",articles);
        return "base-layout";
    }
    @GetMapping("/article/{id}")
    public String details(Model model, @PathVariable Integer id){
        if(!this.articleRepository.exists(id)){
            return "redirect:/";
        }
        Article article=this.articleRepository.findOne(id);

        model.addAttribute("article",article);
        model.addAttribute("view","article/details");

        return "base-layout";
    }
}
