# frozen_string_literal: true

require 'gosu'

class FlappyBird
  def initialize(screen)
    # birds images
    @yb = [Gosu::Image.new(screen, "imgs/byellow1.png"), Gosu::Image.new(screen, "imgs/byellow2.png"), Gosu::Image.new(screen, "imgs/byellow3.png"), Gosu::Image.new(screen, "imgs/byellow1.png")]
    @pb = [Gosu::Image.new(screen, "imgs/bpurple1.png"), Gosu::Image.new(screen, "imgs/bpurple2.png"), Gosu::Image.new(screen, "imgs/bpurple3.png"), Gosu::Image.new(screen, "imgs/bpurple1.png")]
    # for managing which bird to display (different bird after each score)
    @f = 360
    @s = 0
  end

  def update_bird
    @f -= 3
    change if @f.negative?
  end

  def change
    @f = 360
    @s += 1
  end

  def draw(bird_y)
    i = Gosu::milliseconds / 75 % @yb.size
    j = Gosu::milliseconds / 75 % @pb.size
    if (@s % 2).zero?
      @yb[i].draw(50, bird_y, 2)
    else
      @pb[j].draw(50, bird_y, 2)
    end
  end
end

class ObstaclePipe
  def initialize(screen, xvalue = 0)
    # setting pipe img
    @obstacle_pipe = Gosu::Image.new(screen, "imgs/green_pipe.png")
    @screen = screen
    @xvalue = xvalue
    @x_coord = 360
    @y_coord = rand(-250..0)
    # sounds
    @hitting_sound_effect = Gosu::Sample.new(screen, "music/slap_hit.ogg")
    @scoring_sound_effect = Gosu::Sample.new(screen, "music/score.ogg")
  end

  # if the bird hits
  def hit_obstacle(bird_y)
    hit_y = hit_x = false
    hit_x = true if @x_coord < -100
    hit_y = true if bird_y.negative?
    if bird_y > 475
      hit_y = true
      hit_x = true
    end
    hit_y = true if bird_y > @y_coord + 410 || bird_y < @y_coord + 310
    if hit_y && hit_x
      @screen.game_mode(:off)
      @hitting_sound_effect.play
    end
  end

  def set_x_on_score
    @y_coord = rand(-250..0)
    @x_coord = 360 + @xvalue
    @screen.plus_score
    @scoring_sound_effect.play
  end

  def update
    @x_coord -= 4
    set_x_on_score if @x_coord < -190
  end

  # drawing the pipe in the middle
  def draw
    @obstacle_pipe.draw(@x_coord + 30, @y_coord + 420, 1)
    @obstacle_pipe.draw_rot(@x_coord + 210, @y_coord, 1, 180)
  end
end

class MainScreen < Gosu::Window
  def initialize
    super(360, 640, false)
    self.caption = "Munaamullah Khan's Flappy Bird"

    @obstacle_pipe = ObstaclePipe.new(self)
    @flap_bird = FlappyBird.new(self)
    # starting the game up
    @game_mode = :startmode
    @score_design = Gosu::Font.new(self, Gosu::default_font_name, 18)
    @text_design = Gosu::Font.new(self, Gosu::default_font_name, 55)
    # giving assets front/back
    @back = Gosu::Image.new("imgs/sky_road.png")
    @front = Gosu::Image.new("imgs/flappy_road.png")
    @start_msg = Gosu::Image.new("imgs/welcome_msg.png")
    @end_game = Gosu::Image.new(self, "imgs/end.png", true)
    # scores
    @max_s = 0
    @present_s = 0
    # y coordinate of the bird
    @flap_bird_y = 300
    @flap_bird_y_speed = 0
    @x_slide = 0
    # music
    @music = Gosu::Sample.new("music/got_music.ogg")
    @music.play
  end

  # set the state of the game
  def game_mode(game_mode)
    @game_mode = game_mode
  end

  def update
    if @game_mode == :on
      @flap_bird_y_speed += 700 * (update_interval / 1000.0)
      @flap_bird_y += @flap_bird_y_speed * (update_interval / 1000.0)
      @flap_bird.update_bird
      @obstacle_pipe.update
      @obstacle_pipe.hit_obstacle(@flap_bird_y)
      # for bottom screen image
      @x_slide += 4
      @x_slide = 0 if @x_slide > @front.width
    end
  end

  def draw
    @front.draw(-@x_slide, 500, 2)
    @front.draw(-@x_slide + @front.width, 500, 2)
    @back.draw(-@x_slide, 0, 0)
    @back.draw(-@x_slide + @back.width, 0, 0)
    @start_msg.draw(90, 70, 2) if @game_mode == :startmode
    @obstacle_pipe.draw
    @flap_bird.draw(@flap_bird_y)
    on_end_game if @game_mode == :off
    @score_design.draw("Score: #{@present_s}", 140, 10, 150, 1, 1, Gosu::Color::BLACK) if @game_mode == :on
  end

  # update the value of current score
  def plus_score
    @present_s += 1
  end

  def button_down(key)
    if @game_mode == :startmode
      # start the game
      @game_mode = :on if key == Gosu::KbSpace
    end

    case @game_mode
    when :on
      # escape key to end the game
      if key == Gosu::KbEscape
        @game_mode = :off
      end

      if key == Gosu::KbSpace
        # fall down after space keypress
        @flap_bird_y_speed = -300
      end
    when :off
      @obstacle_pipe = ObstaclePipe.new(self)
      @flap_bird = FlappyBird.new(self)
      @present_s = 0
      @game_mode = :startmode if key == Gosu::KbSpace
    end
    close if key == Gosu::KbEscape
  end

  def on_end_game
    @end_game.draw(100, 170, 2)
    if @present_s > @max_s
      @max_s = @present_s
      remarks = "Hurrah! New High Score! #{@max_s}"
    else
      remarks = "Current score #{@present_s}\n Highest score: #{@max_s}"
    end
    @text_design.draw(remarks, 130, 200, 2, 0.4, 0.4, Gosu::Color::RED)
  end
end

screen = MainScreen.new
screen.show

