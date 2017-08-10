<?php

namespace AppBundle\Form;

use CardMakerBundle\Cards\CardFactory;
use CardMakerBundle\Entity\Dto\GenerateCard;
use CardMakerBundle\Handler\CardGenerate;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class CardGenerateType
 * @package AppBundle\Form
 */
class CardGenerateType extends AbstractType
{
    const TEXT_SIZES = [
        'cardmaker.textsize.auto' => 0,
        'cardmaker.textsize.love_me' => 17,
        'cardmaker.textsize.i_know_many_words' => 18,
        'cardmaker.textsize.tiny' => 19,
        'cardmaker.textsize.small' => 20,
        'cardmaker.textsize.normal' => 21,
        'cardmaker.textsize.medium' => 22,
        'cardmaker.textsize.big' => 23,
        'cardmaker.textsize.huge' => 24,
        'cardmaker.textsize.extra_huge' => 25,
        'cardmaker.textsize.democracy_big' => 26,
        'cardmaker.textsize.premium_democracy' => 27
    ];

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('layer', ChoiceType::class, [
                'choices' => CardFactory::CARD_LAYERS,
                'label' => 'cardmaker.form.layer',
                'required' => true
            ])
            ->add('title', TextType::class, [
                'label' => 'cardmaker.form.title',
                'required' => true
            ])
            ->add('tag', TextType::class, [
                'label' => 'cardmaker.form.tag',
                'required' => true
            ])
            ->add('caption', TextType::class, [
                'label' => 'cardmaker.form.caption',
                'required' => false
            ])
            ->add('level', TextType::class, [
                'label' => 'cardmaker.form.level',
                'required' => true
            ])
            ->add('text', TextareaType::class, [
                'label' => 'cardmaker.form.text',
                'required' => true
            ])
            ->add('layoutSize', ChoiceType::class, [
                'choices' => CardGenerate::CARD_LAYOUT_SIZE,
                'label' => 'cardmaker.form.layout_size',
                'required' => false,
                'placeholder' => false
            ])
            ->add('textSize', ChoiceType::class, [
                'choices' => self::TEXT_SIZES,
                'label' => 'cardmaker.form.text_size',
                'required' => false,
                'placeholder' => false
            ])
            ->add('image', FileType::class, [
                'label' => 'cardmaker.form.image',
                'required' => false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => GenerateCard::class));
    }
}
